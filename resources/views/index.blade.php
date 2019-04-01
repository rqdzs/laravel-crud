@extends('layouts.app')

@section('content')

<div class="container">
    @foreach($students as $student)
        <p>Nome: {{$student-> firstname}}</p>
        <p>Sobrenome: {{$student-> lastname}}</p>
        <p>Matrícula: {{$student-> registry}}</p>
        <p>Série: {{$student-> grade}}</p>
        <p><a href='student/{{$student->id}}/edit'> Editar</a> - <a href='student/destroy/{{$student->id}}'> Excluir </a></p>
        <br/>
    @endforeach

    <div>
        <p><a href='/student/create'>Adicionar Novo Aluno</p>
    </div>


</div>