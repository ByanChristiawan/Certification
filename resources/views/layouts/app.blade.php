<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alsavdev Certification</title>
  <link rel="icon" type="image/svg+xml" href="../assets/Logo-Head.svg" />
  @vite("resources/css/app.css")
</head>
<body class="bg-background-200 bg-no-repeat bg-left-top md:bg-[left_4rem] bg-[length:321px_600px] md:bg-[length:550px_1026px]" style="background-image: url(../assets/BgBlob.png);">
  <nav class="item-center mx-auto m-5 px-10 md:px-20 h-[30px] md:h-[50px]">
    <img src="../assets/Logo.png" class="h-[30px] md:h-[50px] mx-auto">
  </nav>
  <section class="md:flex md:px-20 item-center px-5 py-5 h-full gap-14">
      <img src="../assets/Ceritfication-Illustration.svg" class="hidden md:block md:w-[45%] md:my-5 my-3" />
       @yield("content")
  </section>
</body>
</html>