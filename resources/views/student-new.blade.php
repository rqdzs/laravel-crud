@extends('layouts.app')

@section('content')
<html>
    <body>
        <div class="container">
            <form method="post" action="/student">
                {{ csrf_field() }}            
                <p>
                    Nome:
                    <input type="string" name="firstname">
                </p>
                <p>
                    Sobrenome:
                    <input type="string" name="lastname">  
                </p>
                <p>
                    Série:
                    <input type="integer" name="grade">    
                </p>
                <p>
                    Matrícula
                    <input type="integer" name="registry">  
                </p>
                <input type="submit" value="Cadastrar Aluno">
            </form>
        </div>        
    </body>
</html>