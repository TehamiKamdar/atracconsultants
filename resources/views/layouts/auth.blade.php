<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Atrac Consultants | Login</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- RemixIcons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('website/favicon.svg')}}" type="image/x-icon">
<style>
        :root {
            --primary: #2bb673;
            --primary-dark: #1e8a5a;
            --primary-darker: #0a1611;
            --dark-bg: #0f0f0f;
            --dark-card: #1a1a1a;
            --text-light: #f5f5f5;
            --text-muted: #888;
        }
        
        body {
            background-color: var(--dark-bg);
            color: var(--text-light);
            height: 100vh;
            display: flex;
            align-items: center;
            font-family: 'Segoe UI', system-ui, sans-serif;
        }
        
        .login-container {
            max-width: 380px;
            width: 100%;
            margin: 0 auto;
        }
        
        .login-card {
            background-color: var(--dark-card);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 25px var(--primary-darker);
        }
        
        .card-header {
            background-color: var(--primary-darker);
            color: white;
            text-align: center;
            padding: 2rem;
            border: 1px solid;
            border-color: var(--primary-dark);
            border-radius: 11px 11px 0px 0px !important;
            border-bottom: none;
        }
        
        .card-header h2 {
            font-weight: 600;
            margin-bottom: 0.5rem;
            text-shadow: 1px 1px 4px var(--primary-dark)
        }
        
        .card-body {
            padding: 2.5rem;
        }
        
        .form-control {
            background-color: #252525;
            border: 1px solid #333;
            color: var(--text-light);
            padding: 0.75rem 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            background-color: #2a2a2a;
            border-color: var(--primary-dark);
            color: var(--text-light);
            box-shadow: 0 0 0 3px rgba(43, 182, 115, 0.2);
        }
        
        .input-group-text {
            background-color: #252525;
            border: 1px solid #333;
            color: var(--primary);
            border-radius: 8px 0 0 8px !important;
        }
        
        .btn-login {
            background-color: var(--primary-darker);
            border: 1px solid var(--primary-dark);
            color: white;
            padding: 0.75rem;
            font-weight: 500;
            border-radius: 8px;
            width: 100%;
            text-shadow: 1px 1px 5px #0a1611;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .btn-login:hover {
            background-color: var(--primary-darker);
            border: 1px solid var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(43, 182, 115, 0.25);
        }
        
        .form-label {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
            display: block;
        }
        
        /* Password toggle button */
        .password-toggle {
            background-color: var(--primary-darker);
            border: 1px solid var(--primary-dark);
            color: var(--primary);
            border-radius: 0 8px 8px 0 !important;
            cursor: pointer;
        }
        .password-toggle:hover {
            background-color: #0a1611c4;
            border: 1px solid var(--primary);
            color: var(--primary);
        }
    </style>
</head>
<body>
    

    @yield('content')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('ri-eye-line');
                eyeIcon.classList.add('ri-eye-off-line');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('ri-eye-off-line');
                eyeIcon.classList.add('ri-eye-line');
            }
        });
    </script>
</body>
</html>