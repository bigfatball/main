use std::ops::Add;
use std::path::Path;
use std::time::{Duration, Instant};

use actix::prelude::*;
use actix_web_actors::ws;



const HEARTBEAT_INTERVAL: Duration = Duration::from_secs(500000000);

const CLIENT_TIMEOUT: Duration = Duration::from_secs(10000000);

use std::fs::File;
use std::fs::OpenOptions;
use std::io::Write;
use std::io::prelude::*;
use std::io::BufReader;
use std::io::Read;
use actix_web::web::Bytes;
pub struct MyWebSocket{
    hb: Instant,

}



impl MyWebSocket{
    pub fn new() -> Self {
        Self { 
            hb: Instant::now(),
            
        }
    }

    fn hb(&self, ctx:&mut <Self as Actor>::Context){
        ctx.run_interval(HEARTBEAT_INTERVAL, |act,ctx|{
            if Instant::now().duration_since(act.hb) > CLIENT_TIMEOUT {
                println!("Websocket Client heartbear failed, disconnecting!");

                ctx.stop();

                return;
            }
            ctx.ping(b"");

        });
    }
}

impl Actor for MyWebSocket{
    type Context = ws::WebsocketContext<Self>;

    /// Method is called on actor start. We start the heartbeat process here.
    fn started(&mut self, ctx: &mut Self::Context) {
        self.hb(ctx);

        let addr = ctx.address();

        
    }


}


/// Handler for `ws::Message`
impl StreamHandler<Result<ws::Message, ws::ProtocolError>> for MyWebSocket {
    fn handle(&mut self, msg: Result<ws::Message, ws::ProtocolError>, ctx: &mut Self::Context) {
        // process websocket messages
        println!("WS: {msg:?}");
        match msg {
            Ok(ws::Message::Ping(msg)) => {
                self.hb = Instant::now();
                ctx.pong(&msg);
            }
            Ok(ws::Message::Pong(_)) => {
                self.hb = Instant::now();
            }
            Ok(ws::Message::Text(text)) => {
                ctx.text("this is text");
                ctx.text(text);},
            
            //{
                // dd if=/dev/zero of=static/10mb bs=1M count=10
            // let file = File::open("./static/10mb").unwrap();
            // let mut reader = BufReader::new(file);
            // let mut buffer = Vec::new();
        
            // reader.read_to_end(&mut buffer).unwrap();
            // ctx.binary(Bytes::from(buffer));
        //},
            Ok(ws::Message::Binary(bin)) => //ctx.binary(bin),
            {
                //if Path::new("./try.txt").exists() == false{
                //    let mut file = File::create("try.txt").unwrap();
                //    file.write_all(&bin).unwrap();
                //}else{

                //}
                let mut file = File::create("firefox.zip").unwrap();
                file.write_all(&bin).unwrap();
            },
            
            Ok(ws::Message::Close(reason)) => {
                ctx.close(reason);
                ctx.stop();
            },

            Ok(ws::Message::Continuation(blob)) => 
            {
                //let text = actix_http::ws::Item::Last(blob);
                //let blob_clown = blob::Last;
                //ctx.text(blob_clown.into());
                
                ctx.ping(b"this is continuation frame");
                match blob {
                    actix_http::ws::Item::FirstText(a) => 
                    {
                        let mut file = File::create("firefox.zip").unwrap();
                        file.write_all(&a).unwrap();
                    },
                    actix_http::ws::Item::FirstBinary(b) => {
                        let mut file = File::create("firefox.zip").unwrap();
                        file.write_all(&b).unwrap();
                    },
                    actix_http::ws::Item::Continue(c) => {
                        let mut file = OpenOptions::new().append(true).open("firefox.zip").expect("write failed");
                        file.write_all(&c).unwrap();
                    },
                    actix_http::ws::Item::Last(d) => {
                        let mut file = OpenOptions::new().append(true).open("firefox.zip").expect("write failed");
                        file.write_all(&d).unwrap();
                    },
                }
                
            },
            // {
            //     self.send_message("test");
            // }
            // {
            //     let mut file = File::create("669.pdf").unwrap();
            //     let file_data = blob.into(); 
            //     // let file_data_clown = a.into(file_data);
            //     ctx.text(file_data);
            // },
            _ => ctx.stop(),
        }
    }
}