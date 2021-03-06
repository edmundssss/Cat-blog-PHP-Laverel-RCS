@extends('layout')

@section('content')

<main>
        <div class="container">
            <div class="row breadcrumbs">
                <div class="col-sm-12">
                    <a href="/">Home</a>
                    <span class="seperator">></span>
                    <span class="current-page">Chat</span>
                </div>
            </div> <!-- .breadcrumbs -->
            <div class="row" id="chat">
                
                <div class="col-sm-12 ">
                    <div class="chat-main-window">
                    <h5>Peteris: <em> 23.02.2018</em></h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt impedit nam nobis voluptas molestias non magnam optio nemo eveniet nulla eius repellat, quas sit, asperiores, excepturi dolorum sapiente assumenda? Aliquam!</p>
                        
                        <div class="chat-message" v-for="message in messages">
                            
                        
                            <h5>@{{ message.username }} <em>@{{ message.date }}</em></h5>
                            <p>@{{ message.text }}</p>
                        
                        </div><!-- chat-message -->
                        
                        
                        
                    </div><!-- chat-main-window -->
                </div>
                <div class="col-sm-12 ">
                    <div class="chat-message-form">
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="chat-username-input">Username</label>
                                <input v-model="newMessageUsername" type="text" class="form-control" id="chat-username-input">
                            </div>
                        </div>
                        <div class="row">
                        
                            <div class="form-group col-sm-10">
                                <label for="chat-text-input">Message</label>
                                <textarea v-model="newMessageText" class="form-control" id="chat-text-input"></textarea>
                            </div>
                            <div class="form-group col-sm-2">
                                <button class="btn btn-primery" id="chat-send-message-button" v-on:click="sendMessage()">Send</button>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>

            
        </div>
    </main>

@endsection