A simple and responsive photography portfolio website built using PHP, MySQL, HTML, and CSS. This project allows photographers to showcase their work, upload images, and manage a gallery dynamically.

🌟 Features
🏠 Home page with introduction
🖼️ Dynamic image gallery (from database)
⬆️ Image upload system
📩 Contact form
📱 Responsive design
🛠️ Technologies Used
PHP
MySQL
HTML5
CSS3
XAMPP / WAMP (for local server)

⚙️ Setup Instructions
1. Clone the Repository
git clone https://github.com/your-username/photography.git
2. Move to Server Directory

Place the project folder inside:

htdocs (for XAMPP)
3. Start Server
Start Apache
Start MySQL
🗄️ Database Setup
Open phpMyAdmin
Create a database named:
photography
Run the following SQL:
CREATE TABLE photos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    image VARCHAR(255),
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
▶️ Run the Project

Open your browser and go to:

http://localhost/photography
📌 Usage
Visit Gallery to view uploaded photos
Use Upload page to add new images
Fill Contact form to send messages
🚀 Future Improvements
🔐 Admin authentication system
❤️ Like & comment functionality
🗂️ Categories for images
🔍 Search and filter options
💡 Lightbox image preview
🤝 Contributing

Contributions are welcome! Feel free to fork the repository and submit a pull request.

📄 License

This project is open-source and available under the MIT License.

