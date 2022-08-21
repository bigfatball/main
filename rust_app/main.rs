use js_sys::ArrayBuffer;
use yew::prelude::*;

use futures::{SinkExt, StreamExt};
use gloo_net::websocket::{Message, futures::WebSocket};
use wasm_bindgen_futures::spawn_local;
//use wasm_logger::prelude::*;
use wasm_bindgen::prelude::*;
use log::{Level, Log, Metadata, Record};
//use gloo_file::{File, Blob};
use gloo_file::callbacks::FileReader;
use web_sys::{Event, HtmlInputElement};
use std::collections::HashMap;
use web_sys::File;
use gloo_file::Blob;


enum Msg {
    AddOne,
    Conn,
    Files(Vec<File>),
    Submit,   
    LoadedBuffer(String,Vec<u8>),
}   

struct Model {
    value: String,
    files: Vec<String>,
    readers: HashMap<String, FileReader>,
    test_file: Vec<File>,
}

impl Component for Model {
    type Message = Msg;
    type Properties = ();

    fn create(_ctx: &Context<Self>) -> Self {
        Self {
            value: "Hello World!".to_owned(),
            files: vec![],
            readers: HashMap::default(),
            test_file: vec![],
        }
    }

    fn update(&mut self, _ctx: &Context<Self>, msg: Self::Message) -> bool {
        match msg {
            Msg::AddOne => {
                if self.value == "Hello World!"{
                    self.value = "".to_string();
                }else{
                    self.value = "Hello World!".to_string();
                }
                
                // the value has changed so we need to
                // re-render for it to appear on the page
                true
            }
            Msg::Conn => {
                let ws = WebSocket::open("ws://192.168.65.131:8080").unwrap();
    
                let (mut write, mut read) = ws.split();
        
                spawn_local(async move {
                    write.send(Message::Text(String::from("test"))).await.unwrap();
                    write.send(Message::Text(String::from("test 2"))).await.unwrap();
                });
                
                spawn_local(async move {
                    while let Some(msg) = read.next().await {
                        log::info!("Update: {:?}", msg);
                    }
                    
                });
                
                true
            }

            Msg::Files(files) => {
                log::info!("File function{:?}",files);
                let files_clone = files[0].clone();
                //let file_size:f64 = files_clone.size();
                //let file_num:u64 = file_size / 50000;
                log::info!("files_clone: {:?}", files_clone.size());
                // for i in 0..845 {
                //     let start =i*60000;
                //     let end = start + 60000;
                //     let slice = files_clone.slice_with_i32_and_i32(start, end).unwrap();
                //     log::info!("slice: {:?}", slice.size());
                //     app::start_websocket(slice,i);
                   
                // }
                app::start_websocket(files_clone,0);
                true
            }

            Msg::Submit => {
                log::info!("submit function{:?}",self.test_file);
                
                true
            }

            Msg::LoadedBuffer(file_name, data ) =>{
                
                true
            }
        }
    }

    fn view(&self, ctx: &Context<Self>) -> Html {
        // This gives us a component's "`Scope`" which allows us to send messages, etc to the component.
        let link = ctx.link();
        html! {
            <div>
                <button onclick={link.callback(|_| Msg::AddOne)}>{ "+1" }</button>
                <p>{ self.value.to_string() }</p>
                <input type="file" multiple=true onchange={ctx.link().callback(move |e:Event|{
                    let mut result = Vec::new();
                    let input: HtmlInputElement = e.target_unchecked_into();

                    if let Some(files) = input.files(){
                        let files = js_sys::try_iter(&files)
                            .unwrap()
                            .unwrap()
                            .map(|v|web_sys::File::from(v.unwrap()))
                            .map(File::from);
                        result.extend(files);
                    }
                    let test_file = result.clone();
                    Msg::Files(result)
                })}/>
                <button onclick={link.callback(|_| Msg::Conn)}>{ "open" }</button>
                <button onclick={link.callback(|_| Msg::Submit)}>{"submit"}</button>
                <input type="text" id="tb1" value={"First value"}/>
            
            </div>
        }
    }
}

fn main() {
    yew::start_app::<Model>();
    wasm_logger::init(wasm_logger::Config::default());
    
}