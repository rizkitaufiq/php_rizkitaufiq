# PHP Dynamic Form Generator

This is a simple PHP-based application that dynamically generates a form based on the user's input for the number of rows and columns. After submitting the data, the application displays the inputted values with their corresponding cell positions.

# Features

- Input the number of rows and columns via a simple form.
- Dynamically generate an HTML table with text inputs.
- Display each cell's data labeled by its row and column index (e.g., 1.1, 1.2, ...).
- Uses plain PHP, no external libraries or frameworks required.

# File Structure

- `soal1.php`: Page for entering number of rows and columns.
- `soal2.php`: Page that displays a dynamic form with input fields based on the specified rows and columns.
- `soal3.php`: Page that displays the submitted data with corresponding position labels.

# How to Use

1. Open the `soal1.php` file in your browser.
   ```bash
   php -S localhost:8000
   # Then open http://localhost:8000/soal1.php
Enter how many rows and columns you want (e.g., 1 row and 3 columns).

You will be redirected to a form where you can enter values for each cell.

After submitting, the values will be displayed as:

1.1 a
1.2 b
1.3 c
🧠 Example Use Case
If the user enters:

Rows: 1

Columns: 3

Then fills in:

a in 1.1

b in 1.2

c in 1.3

The output will be:

1.1 a
1.2 b
1.3 c