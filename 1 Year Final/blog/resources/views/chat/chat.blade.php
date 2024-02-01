<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Realtime Chat app</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets-chat/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    @props(['users'])
    <div class="container-fluid" style="background-color: #0e1720; height:100vh;">

        <div class="chatContainer">
            <div class="user" id="user">
                <div class="user-info">
                    <i class="fa fa-arrow-left" onclick="hideMenu()"></i>
                    <img src="{{ auth()->user()->image ? asset('storage/' . auth()->user()->image) : asset('assets-blog/img/person-7.jpg') }}"
                        alt="">
                    <span>{{ auth()->user()->name }}</span>
                </div>

                <div class="list-item">
                    <i class="fa fa-home"></i>
                    <button>New Group</button>
                </div>
                <div class="list-item">
                    <i class="fa fa-home"></i>
                    <button>New Group</button>
                </div>
                <div class="list-item">
                    <i class="fa fa-home"></i>
                    <button>New Group</button>
                </div>
                <div class="list-item">
                    <i class="fa fa-home"></i>
                    <button>New Group</button>
                </div>
                <div class="list-item">
                    <i class="fa fa-home"></i>
                    <button>New Group</button>
                </div>
                <div class="list-item">
                    <i class="fa fa-home"></i>
                    <button>New Group</button>
                </div>
                <div class="list-item">
                    <i class="fa fa-home"></i>
                    <button>New Group</button>
                </div>

            </div>

            <div class="sideBar" id="sideBar">

                <div class="searchBar">
                    <i class="fa fa-bars" onclick="showMenu()"></i>
                    <input type="text" placeholder="Search">
                </div>

                <div class="users-list">
                    @unless(count($users) == 0)
                        @foreach ($users as $user)
                            <div class="user-link" onclick="divClick()">
                                <form action="" method="POST" onclick="getMsg()">
                                    @csrf
                                    <div class="content">
                                        <img src="{{ $user->image ? asset('storage/' . $user->image) : asset('/images/1.jpg') }}"
                                            alt="">
                                        <div class="details">
                                            <span>{{ $user->name }}</span>
                                            <p>This is a Test Message</p>
                                        </div>
                                        <input type="text" name="" id="" value="{{ $user->id }}"
                                            hidden>
                                    </div>
                                </form>
                                {{-- <a href="#"  onclick="getMsg()">
                                    <div class="content">
                                        <img src="{{$user->profile_picture ? asset ('storage/' . $user->profile_picture) :
                                        asset('/images/1.jpg')}}" alt="">
                                        <div class="details">
                                            <span>{{$user->name}}</span>
                                            <p>This is a Test Message</p>
                                        </div>
                                    </div>
                                </a> --}}
                            </div>
                        @endforeach
                    @else
                        <p>No Users found</p>
                    @endunless
                </div>

            </div>

            <div class="chat-area">
                <p class="msg" id="p">Select a chat to start messaging</p>

                <div class="header" id="header">
                    <span>Sandun Shamika</span>
                    <p>last seen 10 minutes ago</p>
                </div>

                <div class="chat" id="chat-div">
                    <div class="incoming-msg">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicin <span>10:00 AM</span> </p>
                    </div>
                    <div class="outgoing-msg">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicin <span>10:00 AM</span></p>
                    </div>
                    <div class="incoming-msg">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis eum velit id eligendi
                            voluptatum tempore dolore optio magnam sunt cumque explicabo, dolorem amet et ea nobis
                            aliquam necessitatibus autem rem!<span>10:00 AM</span> </p>
                    </div>
                    <div class="outgoing-msg">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium assumenda iste nesciunt
                            reprehenderit cumque recusandae magnam dolore nemo vero perspiciatis, impedit eum, veniam
                            architecto ad explicabo perferendis sint nisi! Ipsum?<span>10:00 AM</span></p>
                    </div>
                    <div class="incoming-msg">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicin <span>10:00 AM</span> </p>
                    </div>
                    <div class="outgoing-msg">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicin <span>10:00 AM</span></p>
                    </div>
                    <div class="incoming-msg">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicin <span>10:00 AM</span> </p>
                    </div>
                    <div class="outgoing-msg">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicin <span>10:00 AM</span></p>
                    </div>
                    <div class="incoming-msg">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicin <span>10:00 AM</span> </p>
                    </div>
                    <div class="outgoing-msg">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicin <span>10:00 AM</span></p>
                    </div>
                    <div class="incoming-msg">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicin <span>10:00 AM</span> </p>
                    </div>
                    <div class="outgoing-msg">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicin <span>10:00 AM</span></p>
                    </div>
                    <div class="incoming-msg">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicin <span>10:00 AM</span> </p>
                    </div>
                    <div class="outgoing-msg">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicin <span>10:00 AM</span></p>
                    </div>
                    <div class="incoming-msg">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicin <span>10:00 AM</span> </p>
                    </div>
                    <div class="outgoing-msg">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicin <span>10:00 AM</span></p>
                    </div>

                </div>

                <form method="POST" action="/chat/sendMessage" class="footer" id="footer">
                    <input type="text" id="input" placeholder="Write a message...">
                    <input type="text" name="sender" id="" value="{{ auth()->user()->id }}">
                    <input type="text" name="receiver" id="" value="2">
                    <button type="submit">
                        <i class="fa fa-telegram"></i>
                    </button>
                </form>

            </div>

        </div>
    </div>


    <!-- ----------Javascript for toggle menu --------- -->
    <script>
        var user = document.getElementById("user");
        var sideBar = document.getElementById("sideBar");
        var p = document.getElementById("p");
        var header = document.getElementById("header");
        var footer = document.getElementById("footer");

        function showMenu() {
            user.style.left = "0";
            sideBar.style.display = "none";

        }

        function hideMenu() {
            user.style.left = "-300px";
            sideBar.style.display = "block";
        }

        function getMsg() {
            p.style.display = "none";
            header.style.display = "block";
            footer.style.display = "flex";
            document.getElementById("chat-div").style.display = "block";
            document.getElementById("input").focus();

        }

        function divClick() {
            document.body.style.backgroundColor = "#2b5379";
            document.bgColor = "red";
        }
    </script>


    <script src="/javascript/selectUser.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
