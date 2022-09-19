<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>服の買い換え時期計算サイト</h1>
        <form action="/posts" method="POST">
            @csrf
            <h2>服の状態</h2>
            <p class = condition>
                <select name="post[category_id]">
                    @foreach($options as $option)
                        <option value="{{ $option->id }}">{{ $option->condition }}</option>
                    @endforeach
                </select>
            </p>
            
            <h2>服の種類</h2>
            <p class = type>
                <select name="post[category_id]">
                    @foreach($options as $option)
                        <option value="{{ $option->id }}">{{ $option->type }}</option>
                    @endforeach
                 </select>
            </p>
            
            <h2>服の素材</h2>
            <p class = material>
                <select name="post[category_id]">
                    @foreach($options as $option)
                        <option value="{{ $option->id }}">{{ $option->material }}</option>
                    @endforeach
                 </select>
            </p>
            
            <h2>選択頻度の予定</h2>
            <p class = material>
                <select name="post[category_id]">
                    @foreach($options as $option)
                        <option value="{{ $option->id }}">{{ $option->frequency }}</option>
                    @endforeach
                 </select>
            </p>
        
        　　<input type="submit" value="計算する"/>
           
   
   
        </form>
        
       
    </body>
</html>