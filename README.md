PHP Interview Questions
1. What is SESSION? - it is way to make data accessible across the various pages of an entire website
   - it is a variable used to store data on a server rather than the computer of the user.
3. Where SESSION is stored? - at server side, in tmp folder of xampp server.
   - session creates a file in a temporary directory on the server where registered session variables and their values are stored.
4. What is COKKIE - it is piece of information which is stored at client browser. It is used to recognize the user.
5. Where COKKIE is stored? - at client side, at users' computer
   - Cookie is created at server side and saved to client browser.
   - Each time when client sends request to the server, cookie is embedded with request. Such way, cookie can be received at the server side
   - cookie can be created, sent and received at server end and stored at client end
7. How are sessions better than cookies?
   - cookies are also used for storing user related data, they have serious security issues because cookies are stored on the user’s computer and thus they are open to attackers to easily modify the content of the cookie
