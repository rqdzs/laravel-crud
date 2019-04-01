<html>
    <body>
        <form method="post" action="/student/$id}}">            
            {{ csrf_field() }}
			{{ method_field('PUT') }}
            <p>
                Nome:
                <input required type="string" name="firstname" value={{$firstname}}>
            </p>
            <p>
                Sobrenome:
                <input required type="string" name="lastname" value={{$lastname}}>  
            </p>
            <p>
                Série:
                <input required type="integer" name="grade" value={{$grade}}>    
            </p>
            <p>
                 Matrícula
                <input required type="integer" name="registry" value={{$registry}}>  
            </p>
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>