<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Konsultasi</title>
    <link href="{{ asset('forum/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('forum/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('forum/css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('forum/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('forum/css/responsive.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="navbar-menu-left-side239">
                        <ul>
                            <li><a href="{{ route('konsultasi.index') }}" target="_blank"><h2>Duck.in</h2></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- /.container-fluid -->
<section class="main-content920">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="comment-list12993">
                    <div class="container">
                        <div class="row">
                            
                            <div class="comments-container">
                                @foreach ($data as $item)
                                
                                <ul id="comments-list" class="comments-list">
                                    <li>
                                        <div class="comment-main-level">
                                            <!-- Avatar -->
                                            
                                            <!-- Contenedor del Comentario -->
                                            <div class="comment-box">
                                                <div class="comment-head">
                                                    <h6 class="comment-name"><a href="#">{{Auth::user()->name}}</a></h6> <span><i class="fa fa-clock-o" aria-hidden="true"> {{date('D M Y', strtotime($item->created_at))}}</i>
                                                </div>
                                                <div class="comment-content"> {{$item->pertanyaan}} </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                
                                @if ($item->jawaban != null)
                                <ul class="comments-list reply-list">
                                    <li>
                                        
                                        <div class="comment-box">
                                            <div class="comment-head">
                                                <h6 class="comment-name"><a href="#">{{DB::table('users')->where('id', $item->dokter_id)->value('name')}}</a></h6> <span><i class="fa fa-clock-o" aria-hidden="true"> {{date('D M Y H:i:s', strtotime($item->updated_at))}}</i></span>
                                            </div>
                                            <div class="comment-content"> {{$item->jawaban}}</div>
                                        </div>
                                    </li>
                                </ul>
                                @endif
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
                <form method="post" action="{{route('detail.store')}}">
                    @csrf
                    <input type="hidden" name="dokter_id" value="{{$id}}">
                    <div class="comment289-box">
                        <h3>Apa yang ingin anda konsultasikan</h3>
                        <hr>
                        <div class="row">
                            
                            <div class="post9320-box">
                                <textarea name="pertanyaan" class="comment-input219882" placeholder="Apa yang ingin anda konsultasikan..."></textarea> 
                                
                            </div>
                            <button type="submit" class="pos393-submit">Post Your Answer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{asset('forum/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('forum/js/bootstrap.min.js')}}"></script>
<script src="{{asset('forum/js/npm.js')}}"></script>
</body>

</html>