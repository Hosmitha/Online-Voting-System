User Management:

Users can register for an account by providing basic information such as username, password, and email address.
Registered users can log in to access the voting system.
Users can only vote once per election cycle.
Administrative users can manage the election process, including adding or removing candidates and viewing detailed voting results.
Voting Mechanism:

After logging in, users are presented with a list of candidates running for a particular position.
Users can cast their vote by selecting a candidate and submitting their choice.
The system ensures that each user can only cast one vote, which is recorded in the database.
Result Display:

Real-time display of voting results is available for all users to view.
The results page shows the number of votes each candidate has received.
Security Measures:

All user passwords are hashed before being stored in the database to ensure security.
SQL injection prevention is implemented through prepared statements in PHP.
CAPTCHA is integrated into the registration and login forms to prevent automated bots from accessing the system.
Sessions are securely managed to maintain user login states without exposing sensitive information.
Database Design:

The system will use a MySQL database with tables for users, candidates, and votes.
The users table will store user credentials and roles.
The candidates table will hold information about each candidate and their respective positions.
The votes table will track which users have voted for which candidates, ensuring that votes are accurately recorded.
