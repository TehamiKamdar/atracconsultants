@push('title')
Error
@endpush

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }
        body {
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #59585A;
        }
        .container {
            text-align: center;
            max-width: 600px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }
        h1 {
            font-size: 96px;
            color: #2BB673;
        }
        p {
            font-size: 18px;
            margin: 10px 0 20px;
            color: #59585A;
        }
        .link-button {
            display: inline-block;
            padding: 12px 24px;
            background-color: #2BB673;
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        .link-button:hover {
            background-color: #24975e;
        }
    </style>


<div class="container">
    <h1>404</h1>
    <p>Seems like you are messing with our URL.</p>
    <a href="/" class="link-button">Go back to Home</a>
</div>


