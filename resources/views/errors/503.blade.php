<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheduled Maintenance - We'll be back soon!</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        /* CSS Variables for easy customization */
        :root {
            --primary-color: #007bff; /* A nice blue for accents */
            --secondary-color: #6c757d; /* Grey for general text */
            --background-color: #f8f9fa; /* Light grey page background */
            --card-background: #ffffff; /* White for the content box */
            --border-color: #e0e0e0; /* Subtle border for the card */
            --text-color: #343a40; /* Darker text for readability */
            --heading-color: #212529; /* Very dark for headings */
        }

        /* Basic body styling to center content */
        body {
            font-family: 'Inter', sans-serif; /* Apply the modern font */
            background-color: var(--background-color);
            color: var(--text-color);
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            min-height: 100vh; /* Make sure it takes full viewport height */
            margin: 0;
            padding: 20px; /* Add some padding around the edges */
            box-sizing: border-box; /* Include padding in element's total width/height */
            text-align: center; /* Center text within the container */
        }

        /* Styling for the main content container (the "card") */
        .container {
            background-color: var(--card-background);
            border-radius: 12px; /* Slightly more rounded corners for a modern feel */
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1); /* Soft, subtle shadow */
            padding: 40px;
            max-width: 500px; /* Limit the width for better readability on large screens */
            width: 100%; /* Ensure it's responsive on smaller screens */
            border: 1px solid var(--border-color); /* A light border */
        }

        /* Heading styling */
        h1 {
            font-size: 2.8em; /* Larger, more impactful heading */
            color: var(--heading-color);
            margin-bottom: 20px;
            font-weight: 700; /* Bolder font weight */
            display: flex; /* Use flexbox to align icon and text */
            align-items: center; /* Vertically align icon and text */
            justify-content: center; /* Center the icon and text block */
            gap: 15px; /* Space between the icon and text */
        }

        /* Icon specific styling */
        h1 .icon {
            font-size: 1.2em; /* Adjust icon size relative to text */
            color: var(--primary-color); /* Color the wrench */
            animation: spin 2s infinite linear; /* Smooth spinning animation */
        }

        /* Paragraph text styling */
        p {
            font-size: 1.1em; /* Slightly larger paragraph text */
            line-height: 1.6; /* Improved line spacing for readability */
            color: var(--secondary-color);
            margin-bottom: 30px;
        }

        /* Footer text styling */
        .footer-text {
            font-size: 0.9em;
            color: #999; /* Lighter grey for less prominence */
            margin-top: 30px;
        }

        /* Keyframe animation for the spinning wrench */
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Responsive adjustments for smaller screens */
        @media (max-width: 600px) {
            h1 {
                font-size: 2em; /* Smaller heading on small screens */
                flex-direction: column; /* Stack icon and text vertically */
                gap: 5px; /* Reduce gap when stacked */
            }
            h1 .icon {
                font-size: 1.5em; /* Make icon a bit larger when stacked */
            }
            p {
                font-size: 1em; /* Smaller paragraph text */
            }
            .container {
                padding: 30px; /* Reduce padding on small screens */
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>
            <span class="icon">🔧</span> We'll be back soon!
        </h1>
        <p>
            Sorry for the inconvenience. We're performing essential maintenance to improve our service. 
            Please check back in a little while!
        </p>
        <p class="footer-text">
            Thank you for your patience.
        </p>
    </div>
</body>
</html>