use std::time::{Duration, Instant};

use actix::prelude::*;
use actix_web_actors::ws;

const HEARTBEAT_INTERVAL: Duration = Duration::from_secs(5);

const CLIENT_TIMEOUT: Duration = Duration::from_secs(10);

use std::fs::File;
use std::io::prelude::*;
use std::io::BufReader;
use std::io::Read;
use actix_web::web::Bytes;
pub struct MyWebSocket{
    hb: Instant,
}

impl MyWebSocket{
    pub fn new() -> Self {
        Self { hb: Instant::now()}
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
            Ok(ws::Message::Text(text)) => ctx.text(text),
            
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
                let mut file = File::create("test.txt").unwrap();
                file.write_all(&bin).unwrap();
            },
            
            Ok(ws::Message::Close(reason)) => {
                ctx.close(reason);
                ctx.stop();
            }
            _ => ctx.stop(),
        }
    }
}