<!DOCTYPE html>
<html lang="ja">

<head>
  <meat charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
  <h2>
  <?php
  $str = 'Appleが5個あります。Orangeは1個しかありません。';

  echo '検索対象'. $str;
  ?>
  </h2>

    <p>
      <?php
      $email = 'samurai.0233@gmail.com';

      echo '検索対象 :' .$email;
      ?>
  </h2>

  </P>

    <p>
      <?php
      echo 'メールアドレスのフォーマットと完全に一致しているかどうかを正規表現で検索します。<br>';

      if (preg_match_all('/\A[a-zA-Z0-9.]+@[a-zA-Z0-9.]+\z/',$email)){
        echo '>正規表現に一致しました。';
      } else{
        echo '>正規表現に一致しませんでした。';
      }
      ?>
    </p>

</body>

<html>