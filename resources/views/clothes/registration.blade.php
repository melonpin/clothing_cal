<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>服を買い換える時期を計算するサイト</title>
    </head>
    <body>
        <h1>計算結果</h1>
        <form action="/clothes" method="POST">
            
       <div class='posts'>
            @foreach ($options as $option)
                <div class='post'>
                    <a href='/clothess/{{ $option -> id }}'><h2 class='title'>{{ $option->condition }}</h2></a>
                </div>
                
                <a href="/options/{{ $option->id }}">{{ $option->condition }}</a>
            @endforeach
          <div>
       
       </form>
       
        
        
        
    </body>
</html>