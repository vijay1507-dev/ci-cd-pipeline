<!DOCTYPE html>
<html>
<head>
    <title>Rader Free Server</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f5f5f5; }
        .container { max-width: 600px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #333; }
        .info { background: #e9f7ef; padding: 15px; border-left: 4px solid #27ae60; margin: 20px 0; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Rader Free Server</h1>
        
        <div class="info">
            <p><strong>Server Status:</strong> Running successfully!</p>
            <p><strong>PHP Version:</strong> <?php echo phpversion(); ?></p>
            <p><strong>Server Time:</strong> <?php echo date('Y-m-d H:i:s'); ?></p>
        </div>
        
        <h2>Docker Configuration</h2>
        <p>Your Docker container is now running with:</p>
        <ul>
            <li>PHP 8.1 Apache Server</li>
            <li>MySQL Database</li>
            <li>Port mapping: 8080 -> 80</li>
        </ul>
        
        <h2>Next Steps</h2>
        <ol>
            <li>Connect to your MySQL database using:
                <ul>
                    <li>Host: db</li>
                    <li>User: user</li>
                    <li>Password: password</li>
                    <li>Database: myapp</li>
                </ul>
            </li>
            <li>Place your PHP application files in this directory</li>
            <li>Access your site at http://localhost:8080</li>
        </ol>
    </div>
</body>
</html>