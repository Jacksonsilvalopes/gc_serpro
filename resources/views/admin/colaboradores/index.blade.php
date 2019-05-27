@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col s11 " style="margin-left: 65px;">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <nav class="grey" style="margin-top: 10px;">
                <div class="nav-wrapper">
                    <divcontainer class="container">
                        <div class="col s12">
                            <a href="{{route('home')}}" class="breadcrumb"><i class="material-icons">home</i> </a>
                            <a href="{{route('colaboradores.index')}}"class="breadcrumb">Consultar Colaboradores  </a>                          
                        </div>
                </div>   
            </nav>
             
            <form class="form-inline" method="GET" action="{{route('colaboradores.index')}}" >
                <div class="row ">
                    <div class="col s8 ">
                        <div class="input-field">
                            <input type="search" name="pesquisa" class="form-control"  value="{{$pesquisa}}">
                            <label for="pesquisa">Pesquisar</label>
                        </div>
                    </div>
                    <div class="col s4 " style="margin-top: 25px;">
                        <button type="submit" class="btn btn-primary ">Busca</button>
                        <a class="btn btn-success " href="{{route('colaboradores.index')}}">Limpar</a>
                        
                    </div>
                </div>
            </form>
            <table class="highlight  responsive-table">
                <thead>
                    <tr>
                        <th scope="col">Matricula</th>     
                        <th scope="col">Nome</th>
                        <th scope="col">Lotacão</th>                      
                        <th><i class="material-icons">email</i> Email</th>
                        <th>  <i class="material-icons">phone</i> Telefone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $lists)
                    <tr>
                        <td> {{$lists->matricula}}</td> 
                        <td> {{$lists->nome}}</td>
                        <td> {{$lists->lotacao}}</td>                                              
                        <td> {{$lists->email}}</td>
                        <td> {{$lists->telefone}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @if(!$pesquisa)                
            <ul class="pagination grey center fixed">
              
                {{$list->Links()}}        
            </ul>
            @endif
        </div>
    </div>
</div>
@endsection

