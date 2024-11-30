<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anima Responsive UI</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-color: #f5f5f5;
    }

    #anima-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      max-width: 400px;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
    }

    #anima-container img {
      max-width: 100%;
      height: auto;
      margin-bottom: 20px;
    }

    h3 {
      font-size: 18px;
      margin-bottom: 10px;
      font-weight: 500;
      line-height: 26px;
      font-family: "Roslindale", serif;
    }

    p {
      font-size: 14px;
      margin-bottom: 20px;
      font-weight: 400;
      line-height: 20px;
      color: #555;
    }

    a.btn {
      display: inline-block;
      background-color: #3366ff;
      color: #fff;
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 4px;
      font-size: 14px;
      font-weight: 500;
      transition: background-color 0.3s ease;
    }

    a.btn:hover {
      background-color: #254edb;
    }

    #icon-container {
      display: flex;
      justify-content: space-around;
      margin-top: 20px;
    }

    svg {
      width: 24px;
      height: 24px;
      fill: #555;
      cursor: pointer;
      transition: fill 0.3s ease;
    }

    svg:hover {
      fill: #3366ff;
    }

    #anima-watermark {
      margin-top: 20px;
      font-size: 12px;
      color: #aaa;
    }

    #anima-watermark a {
      text-decoration: none;
      color: #3366ff;
    }

    #anima-watermark a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div id="anima-container">
    <!-- Illustration -->
    <div>
      <img src="https://animaapp.s3.amazonaws.com/static/comment-illustration.svg" alt="Comment Illustration">
    </div>

    <!-- Text Content -->
    <h3>Get clean code you’ll love with Anima</h3>
    <p>
      Login and easily export HTML, React, or Vue of this prototype.<br>
      Don’t have an account? Sign up for free!
    </p>

    <!-- Button -->
    <a href="https://projects.animaapp.com/p/undefined/s/undefined?mode=code&utm_campaign=get-code&utm_medium=get-code&utm_source=animaapp.io" 
       target="_blank" 
       rel="noopener noreferrer" 
       class="btn">
      Get Code
    </a>

    <!-- Additional Illustration -->
    <div>
      <img src="https://animaapp.s3.amazonaws.com/static/code-illustration.svg" alt="Code Illustration">
    </div>

    <!-- Icons -->
    <div id="icon-container">
      <svg xmlns="http://www.w3.org/2000/svg" class="home-icon" fill="none">
        <path d="M8.151 11a.25.25 0 01-.167-.436l4.349-3.913a.25.25 0 01.334 0l4.349 3.913a.25.25 0 01-.167.436H8.15zM16 12H9v4a1 1 0 001 1h5a1 1 0 001-1v-4z" fill="#fff"></path>
      </svg>

      <svg xmlns="http://www.w3.org/2000/svg" class="arrow-icon" fill="none">
        <path d="M15 18l-6-6 6-6" stroke="#555" stroke-linecap="round" stroke-linejoin="round"></path>
      </svg>

      <svg xmlns="http://www.w3.org/2000/svg" class="arrow-icon" fill="none">
        <path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"></path>
      </svg>
    </div>

    <!-- Watermark -->
    <div id="anima-watermark">
      <a href="https://www.animaapp.com" target="_blank" rel="noopener noreferrer">
        Made with Anima
      </a>
    </div>
  </div>
</body>
</html>