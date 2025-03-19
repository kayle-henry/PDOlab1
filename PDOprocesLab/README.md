## PDO Lab for Web Systems

#### Objective
Create a simple web application using the **PDO pattern**. The application will provide a single-page list view of dog information retrieved from a MySQL database. The project assesses your understanding of PDO architecture, MySQL database interaction, and web programming.

---

### Instructions

1. **Database Setup**: 
   Run the following command to create the dogsDB and populate with data.
   ```
   sudo mysql < dogs.sql
   ```

2. **Model**:
   Implement and test the PHP files, **Dog.php**, and **DogDAO.php** to implement the model to retrieve all dogs from the database.

3. **View**:  
   Implement and test the PHP file, **listView.php** that displays all the dogs in a table format. Each row should display the information for all of the fields in the dogs table. Use *Bootstrap* to format the table and page.
   
4. **Controlling**:  
   Implement and test the in the PHP files, the code to coontrol that action you will use the image in your pages.
   ```  
<img src="dogs.png" alt="dogs">

---

5. **Application Structure**:  
   - Follow the directory structure below:  
     ```
     /exam2
     ├── dogs.sql
     ├── /model
     │   └── Dog.php
     │   └── DogDAO.php
     ├── /views
     │   └── listView.php
     │   └── AddView.php
   
     ```

### Exam Submission

Push your repo (zipped or expanded) to google drive, Github account or other means of submission to blackboard.  I will be grading the Blackboard acct.

