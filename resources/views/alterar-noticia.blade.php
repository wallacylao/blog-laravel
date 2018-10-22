<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog - Alterar notícia</title>

        <!-- Favicon -->
        <link href="{{URL::asset('img/favicon.ico')}}" rel="shortcut icon">

        <!-- Fonts -->        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" />       

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{URL::asset('js/ajax.js')}}"></script>
    </head>
    <body>
           
        <div id="line-one">
            <div class="container">
                
                <div class="row">  
                    <br>
                    <h4 id="center"><b>ALTERAR NOTÍCIA</b></h4>
                    <br> 
                    <form method="post" 
                          action="{{route('noticia.update', $noticia->id)}}" 
                          enctype="multipart/form-data">
                        {!! method_field('put') !!}
                        {{ csrf_field() }}
                        <div class="col-md-12">              
                            <div class="form-group">
                                <label for="titulo">Título</label>
                                <input type="text" name="titulo" 
                                       class="form-control" 
                                       value="{{$noticia->titulo}}"
                                       required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="conteudo">Conteúdo</label>
                                <input type="text" name="conteudo" 
                                       class="form-control" 
                                       value="{{$noticia->conteudo}}"
                                       required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="categoria">Categoria</label>
                                <input type="text" name="categoria" 
                                       class="form-control" 
                                       value="{{$noticia->categoria}}"
                                       required>
                            </div>    
                        </div>                 
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="autor">Autor</label>
                                <input type="text" name="autor"                               
                                       class="form-control"
                                       value="{{$noticia->autor}}"
                                       required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="keywords">Palavras-chave</label>
                                <input type="text" name="keywords"                               
                                       class="form-control"
                                       value="{{$noticia->keywords}}"
                                       required>
                            </div>
                        </div>
                        <div class="col-md-12">                   
                            <button type="submit" 
                                    class="btn btn-warning" id="black">
                                Alterar
                            </button>
                        </div>
                    </form>             
                </div>
            </div>
        </div>
    </body>
</html>
