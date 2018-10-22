<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog Laravel</title>
        
        <!-- Favicon -->
        <link href="{{URL::asset('img/favicon.ico')}}" rel="shortcut icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" /> 
        <link href="{{URL::asset('css/lightbox.css')}}" rel="stylesheet" type="text/css" /> 

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{URL::asset('js/ajax.js')}}"></script>
        <script src="{{URL::asset('js/lightbox.js')}}"></script>
    </head>
    <body>
        
        <div id="line-one">   
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="center"> 
                        <h1><b>ADMIN</b></h1>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                      
                        <br>
                        <a href="{{route('noticia.create')}}" 
                           class="btn btn-default btn-sm pull-right">
                            <span class="glyphicon glyphicon-plus"></span>Adicionar nova notícia</a>
                        
                    </div>           
                </div>

                <div class="row">
                    <div class="col-md-12">   
                        <br />
                        <h4 id="center"><b>Notícias cadastradas</b></h4>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Título</th>
                                        <th>Conteúdo</th>
                                        <th>Categoria</th>
                                        <th>Autor</th>                
                                        <th>Palavras-chave</th>                
                                        <th>Ações</th>                
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($noticias as $noticia)
                                    <tr>
                                        <td title="Nome">{{$noticia->titulo}}</td>
                                        <td title="Conteudo">{{$noticia->conteudo}}</td>
                                        <td title="Categoria" id="center">{{$noticia->categoria}}</td>
                                        <td title="Autor">{{$noticia->autor}}</td> 
                                        <td id="center">{{$noticia->keywords}}</td>
                                        <td id="center">
                                            <a href="{{route('noticia.show', $noticia->id)}}" 
                                               data-toggle="tooltip" 
                                               data-placement="top"
                                               title="Visualizar"><i class="fa fa-eye"></i></a>
                                            <a href="{{route('noticia.edit', $noticia->id)}}" 
                                               data-toggle="tooltip" 
                                               data-placement="top"
                                               title="Alterar"><i class="fa fa-pencil"></i></a>
                                            &nbsp;<form style="display: inline-block;" method="POST" 
                                                        action="{{route('noticia.destroy', $noticia->id)}}"                                                        
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Excluir" 
                                                        onsubmit="return confirm('Confirma exclusão?')">
                                                {{method_field('DELETE')}}{{ csrf_field() }}                                                
                                                <button type="submit">
                                                    <a><i class="fa fa-trash-o"></i></a>                                                    
                                                </button></form></td>               
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </body>
            </html>

