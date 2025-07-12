<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Logs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Suman Tulsiani Access History Record</h1>
        <div class="d-flex justify-content-end mb-3"> 
        <button type="button" onclick="printTable()">Print to PDF</button>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>IP Address</th>
                    <th>User Agent</th>
                    <th>Login Time</th>
                    <th>Logout Time</th>
                    <th>Location</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'db.php';

                $stmt = $pdo->query("SELECT * FROM login_logs ORDER BY login_time DESC");
                while ($row = $stmt->fetch()) {
                    $lat = htmlspecialchars($row['latitude']);
                    $lon = htmlspecialchars($row['longitude']);
                    $locationLink = (!empty($lat) && !empty($lon)) ?
                        "<a href='https://www.google.com/maps?q={$lat},{$lon}' target='_blank'>View Location</a>" :
                        "No Location";

                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['user_id']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['ip_address']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['user_agent']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['login_time']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['logout_time']) . "</td>";
                    echo "<td>" . $locationLink . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

     <script>

        function printTable() {
    const printWindow = window.open('', '', 'height=800,width=1000');
    const tableHTML = document.querySelector('table').outerHTML;
    const currentDate = new Date();
    const formattedDate = currentDate.toLocaleString('en-US', {
        year: 'numeric',
        month: 'short',
        day: 'numeric',
        hour: 'numeric',
        minute: 'numeric',
        hour12: true,
    });

    printWindow.document.write(`
        <html>
            <head>
                <title>Access History</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        margin: 20px;
                    }
                    h1, h2 {
                        text-align: center;
                    }
                    table {
                        width: 100%;
                        border-collapse: collapse;
                        margin: 20px 0;
                    }
                    table, th, td {
                        border: 1px solid black;
                    }
                    th, td {
                        padding: 10px;
                        text-align: center;
                    }
                    th {
                        background-color: #f4f4f4;
                    }
                </style>
            </head>
            <body>
                <h1>Suman Tulsiani Access History Record</h1>
                <h2>Generated on: ${formattedDate}</h2>
                ${tableHTML}
            </body>
        </html>
    `);

    printWindow.document.close();
    printWindow.print();
}

    </script>
</body>
</html>
