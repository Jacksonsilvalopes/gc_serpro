@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col m12">
          
              

               
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <nav class="grey" aria-label="breadcrumb">
                        <ol class="breadcrumb">                        
                            <li class="breadcrumb-item active" aria-current="page">Lista de Usuários</li>
                        </ol>
                    </nav>
                    <form class="form-inline" method="GET" action="{{route('usuarios.index')}}" >
                       
                        <div class="form-group mb-2">
                            <a href="#">Adicionar</a>
                        </div>
                        <div class="form-group mx-sm-3 mb-2">

                            <input type="search" name="search" class="form-control" placeholder="busca" value="">
                        </div>
                      
                        <button type="submit" class="btn btn-primary ">Busca</button>
                           <a class="btn btn-success " href="{{route('usuarios.index')}}">Limpar</a>
                    
                    </form>

                    <table class="highlight">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nome</th>
                                <th scope="col">e-mail</th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach($list as $lists)
                            <tr>
                                <th scope="row"> {{$lists->id}}</th>
                                <td> {{$lists->name}}</td>
                                <td> {{$lists->email}}</td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>

            
                    <div class="">
                                       
                    </div>
           
            

       

        </div>

    </div>

</div>
@endsection

