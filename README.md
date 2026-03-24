# Delta_scams
Welcome to Deltascams, a tool belonging to the Delta Project.

It was developed by Mohammed Al-Khadri or "dreed32w"

# Description of the tool
The tool creates a custom dummy page of your choice and generates a Cloudflare link that you can send to anyone in the world.

It also sends the entered information to the email address you registered with it, as well as the information in the user_data.json file.

Furthermore, the tool provides a way to send the page to multiple email addresses simultaneously, all for free.

# How to use
First, open the Deltascams.exe file.

Second, click Login, then enter your email address and the app password you'll receive through two-step verification on your Gmail account.

Third, choose any fake page and click Start. A Cloudflare link will be generated for you. Send this link to the victim and wait for the information in your Gmail or in the user_data.json file.

Fourth, the multi-email sender (optional): Click the sender button at the top. This will take you to another screen where you'll fill in the message information and upload the victim emails. Then click send (this will take some time).

# Tool features
The tool is open-source, meaning it's customizable. If you're a programmer, you can add more fake pages to the pages folder. However, if you add another fake page, make sure that `<form action="../../send.php" mehod="post">` is correct. Also, ensure that the email field contains 'name="email"' and the password field contains 'name="password"'.

Additionally, there's a tool file called 'Deltascams.py' that you can modify.
