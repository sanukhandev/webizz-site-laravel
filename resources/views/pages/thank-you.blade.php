<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Thank You</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .thank-you-container {
      background-color: #ffffff;
      padding: 40px 30px;
      border-radius: 12px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
      text-align: center;
      max-width: 400px;
      width: 90%;
    }

    .thank-you-container img {
      width: 80px;
      margin-bottom: 0px;
    }

    .thank-you-container h1 {
      font-size: 28px;
      color: #333333;
      margin-bottom: 0px;
    }

    .thank-you-container p {
      font-size: 16px;
      color: #555555;
      margin-bottom: 30px;
    }

    .thank-you-container a {
        display: inline-block;
        padding: 9px 25px;
        background-color: #ff6b00;
        color: #ffffff;
        text-decoration: none;
        border-radius: 46px;
        font-size: 16px;
        transition: background-color 0.3s;
        text-transform: uppercase;
        line-height: normal;
        margin: 30px 0 0 0;
    }

    .thank-you-container a:hover {
      background-color: #ff7d20ff;
    }

    @media (max-width: 480px) {
      .thank-you-container {
        padding: 30px 20px;
      }

      .thank-you-container h1 {
        font-size: 24px;
      }

      .thank-you-container p {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>

  <div class="thank-you-container">
    <img src="https://cdn-icons-png.flaticon.com/512/845/845646.png" alt="Success Icon">
    <h1>Thank You!</h1>
    <!-- <p>Your action was completed successfully. We appreciate your response.</p> -->
    <a href="{{ENV('APP_URL')}}">Return to Home</a>
  </div>

</body>
</html>
