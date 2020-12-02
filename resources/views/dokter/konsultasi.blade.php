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
                            <li><a href="{{ route('fdokter.index') }}" target="_blank"><h2>Duck.in</h2></a></li>
                        </ul>
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
                                            <button type="button" onclick="btnJawab({{$item->id}})" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                Jawab Pertanyaan
                                            </button>
                                            
                                            <!-- Contenedor del Comentario -->
                                            <div class="comment-box">
                                                <div class="comment-head">
                                                    <h6 class="comment-name"><a href="#">{{DB::table('users')->where('id', $item->peternak_id)->value('name')}}</a></h6> 
                                                    <span><i class="fa fa-clock-o" aria-hidden="true"> {{date('D M Y H:i:s', strtotime($item->created_at))}}</i></span>
                                                </div>
                                                <div class="comment-content"> {{$item->pertanyaan}} 
                                                </div>
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
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Jawaban</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="jawabDokter" method="post">
                                <div class="modal-body">
                                    @csrf
                                    <p>
                                        <label>Jawaban:</label>
                                        <textarea name="jawaban"  class="textarea" placeholder="Jawaban.."
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                    </textarea> 
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="{{asset('forum/js/jquery-3.1.1.min.js')}}"></script>
        <script src="{{asset('forum/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('forum/js/npm.js')}}"></script>
        
        <script>
            function btnJawab(id) {
                var action = "{{url('konsul')}}" + "/" + id;
                $('#jawabDokter').attr('action', action);
            }
        </script>
    </body>
    
    </html>