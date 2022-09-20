<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>服を買い換える時期を計算するサイト</title>
        <link rel="stylesheet" href="/css/menu.css">
         <script type="text/javascript" src="/js/menu.js"></script>
    </head>
    <body>
        
    <div class="hamburger">
  <span></span>
  <span></span>
  <span></span>
</div>
<form action="/clothes/registration" method="POST">

<header class="header">
  <div class="logo">服の買い換え時期計算サイト</div><!-- /.logo -->

  <!-- ハンバーガーメニュー部分 -->
  <div class="drawer">
    <!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
    <input type="checkbox" id="drawer-check" class="drawer-hidden" >

    <!-- ハンバーガーアイコン -->
    <label for="drawer-check" class="drawer-open"><span></span></label>

    <!-- 追加：メニューを閉じるための要素 -->
    <label for="drawer-check" class="drawer-close"></label>

    <!-- メニュー -->
    <nav class="drawer-content">
      <ul class="drawer-list">
        <li class="drawer-item">
         <input type="submit" value="登録結果"/>
        </li>
    </nav>

  </div>
</header>
        </form>
    <form action="/clothes/result" method="POST">    
            @csrf
            <h2>服の状態</h2>
            <p class = condition>
                <select name="condition">
                    @foreach($options as $option)
                        <option value ="{{ $option->condition }}">{{ $option->condition }}</option>
                    @endforeach
                </select>
            </p>
            
            <h2>服の種類</h2>
            <p class = type>
                <select name="type">
                    @foreach($options as $option)
                        <option value="{{ $option->type }}">{{ $option->type }}</option>
                    @endforeach
                 </select>
            </p>
            
            <h2>服の素材</h2>
            <p class = material>
                <select name="material">
                    @foreach($options as $option)
                        <option value="{{ $option->material }}">{{ $option->material }}</option>
                    @endforeach
                 </select>
            </p>
            
            <h2>選択頻度の予定</h2>
            <p class = frequency>
                <select name="frequency">
                    @foreach($options as $option)
                        <option value="{{ $option->frequency }}">{{ $option->frequency }}</option>
                    @endforeach
                 </select>
            </p>
        
        　<input type="submit" value="計算する"/>
   
        </form>
        
       
    </body>
</html>