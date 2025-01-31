

# edmeye 🇪🇹  
**Ethiopian Calendar (Geez) Age Calculator**  

edmeye is a free, open-source web application that calculates your age in the Ethiopian calendar system (Geez). It provides precise age calculations in years, months, weeks, days, hours, minutes, and seconds, all based on the unique 13-month Ethiopian calendar. Built with modern web technologies, edmeye is fast, responsive, and easy to use.  

🌍 **Why edmeye?**  
Ethiopia follows its own calendar system, which is distinct from the Gregorian calendar. This tool bridges the gap, offering a culturally relevant solution for Ethiopians and anyone interested in the Geez calendar to accurately calculate ages and track time.  

---

## ✨ Features  
- 🇪🇹 **Ethiopian Calendar Support**: Built specifically for Geez calendar dates.  
- 📅 **Multi-Unit Age Calculation**: Breaks down age into years, months, weeks, days, hours, minutes, and seconds.  
- 🖥️ **User-Friendly Interface**: Clean and intuitive design powered by **Tailwind CSS**.  
- ⚡ **Real-Time Calculations**: Instant results as you input your date of birth.  
- 🌐 **Responsive Design**: Works seamlessly on all devices (desktop, tablet, and mobile).  
- 🔒 **Secure Backend**: Built with **Laravel** for robust and reliable performance.  

---

## 🛠️ Tech Stack  
- **Frontend**:  
  - HTML  
  - Tailwind CSS (for styling)  
  - JavaScript (for dynamic and interactive UI)  
- **Backend**:  
  - Laravel (for server-side logic and API handling)  
- **Other Tools**:  
  - Vite (for frontend build and optimization)  
  - Axios (for API communication)  

---

## 📂 Project Structure  
```
edmeye/  
├── frontend/               # React JS application  
│   ├── public/             # Static assets  
│   ├── src/                # React components and logic  
│   └── tailwind.config.js  # Tailwind CSS configuration  
├── backend/                # Laravel application  
│   ├── app/                # Application logic  
│   ├── routes/             # API routes  
│   └── ...                 # Other Laravel files  
└── README.md               # Project documentation  
```

---

## 🛠️ Installation  
To run edmeye locally, follow these steps:  

### Prerequisites  
- Node.js (for React JS)  
- Composer (for Laravel)  
- PHP (for Laravel)  
- MySQL or any supported database  

### Steps  
1. **Clone the repository**:  
   ```bash  
   git clone https://github.com/mintesnot-teshome/edmeye.git  
   cd edmeye  
   ```  

2. **Set up the backend (Laravel)**:  
   ```bash  
   cd backend  
   composer install  
   cp .env.example .env  
   php artisan key:generate  
   ```  
   Update the `.env` file with your database credentials.  
   ```bash  
   php artisan migrate  
   php artisan serve  
   ```  

3. **Set up the frontend (React JS)**:  
   ```bash  
   cd ../frontend  
   npm install  
   npm run dev  
   ```  

4. **Access the application**:  
   Open your browser and navigate to `http://localhost:3000`.  

---

## 🤝 Contributing  
Contributions are welcome! Whether you want to fix a bug, improve the design, or add a new feature, feel free to open an issue or submit a pull request.  

1. Fork the repository.  
2. Create a new branch:  
   ```bash  
   git checkout -b feature/your-feature-name  
   ```  
3. Commit your changes:  
   ```bash  
   git commit -m "Add your message here"  
   ```  
4. Push to the branch:  
   ```bash  
   git push origin feature/your-feature-name  
   ```  
5. Open a pull request.  

---

## 📄 License  
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.  

---

*Celebrate time, the Ethiopian way.*  
*Star ⭐ the repo if you find this project useful!*  

--- 

