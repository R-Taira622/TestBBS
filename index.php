<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>掲示板</title>
</head>
<body>

  <header class="header">
  <h1>掲示板</h1>
  </header>

  <main>
    <section class="new_post">
      <h2>新規投稿</h2>
      <div class="pose-area">
        <p>
          名前：
          <textarea name="name" id="name" cols="30" rows="10"></textarea>
        </p>

        <p>
          本文：
          <textarea name="text" id="text" cols="30" rows="10"></textarea>
        </p>
      </div>
    </section>

    <section class="view">
      <h2>投稿一覧</h2>
      <ul class="post-view">
        <li>Post1</li>
        <li>Post2</li>
        <li>Post3</li>
      </ul>
    </section>
  </main>

  <footer class="footer">
    &copy; Hirata 2021
  </footer>
  
</body>
</html>
