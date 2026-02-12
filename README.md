# 📰 Nawa Aawaj (नयाँ आवाज)

A modern Nepali News Portal built with Laravel 12 and a responsive frontend using HTML, JavaScript, Tailwind CSS, and Bootstrap.

Nawa Aawaj delivers categorized news articles with SEO optimization, advertisement management, and a powerful admin dashboard for content control.

## 📸 Screenshots

### 🏠 Homepage
![Homepage](screenshots\homepage.jpeg)

### 📰 Article Page
![Article Page](screenshots\article.jpeg)

### 🧑‍💻 Admin Dashboard
![Admin Dashboard](screenshots/admin-dashboard.png)

## 🚀 Tech Stack

    🔹 Frontend
        - HTML5
        - JavaScript
        - Tailwind CSS
        - Bootstrap

    🔹 Backend
        - Laravel 12
        - Blade Template Engine

    🔹 Database
        - MySQL(Xammp)

## 🚀 Installation

### Prerequisites

- PHP 8.2+
- Composer
- Node.js & NPM
- MySQL/MariaDB

### Database Setup

Create a new database:

```bash
mysql -u root -p
```

```sql
CREATE DATABASE newsportal;
EXIT;
```

### Installation Steps

1. **Clone & Configure**

```bash
git clone https://github.com/romanbenzu1/Newsportal.git
cd Newsportal
cp .env.example .env

```

2. **Install Dependencies**

```bash
composer install
npm install
```

3. **Generate Assets**

```bash
npm run build  # For production
# OR
npm run dev    # For development
```

4. **Setup Application**

```bash
php artisan key:generate
```

5. **Start Services**

```bash
# Terminal 1: Application Server
php artisan serve
```

# 🧑‍💻 Admin Panel Features

The system includes a fully functional admin dashboard with sidebar navigation:

    ## 📊 Dashboard
        - Overview of content
        -System management access

    ## 🏷 Category Management
        - Create, edit, delete categories
        - Slug-based structure
        - Position ordering
        - Status control (Active/Inactive)
        - SEO fields (Meta Keywords & Meta Description)

    ## 📰 Article Management
        -Create, edit, delete articles
        -Assign multiple categories (Many-to-Many relationship)
        -Featured image upload
        -Author name
        -View counter
        -SEO fields
        -Publish status control

    ## 📢 Advertisement Management
        -Upload advertisement banners
        -Set ad position:
        -Header
        -Home Page
        -Other Pages
        -Expiry date control
        -Redirect URL
        -Company details

## 🗄 Database Structure
  ### 📁 Categories Table
   - id
   - title
   - slug
   - status
   - position
   - meta_keywords
   - meta_description
   - timestamps

  ### 📁 Articles Table
    - id
    - title
    - views
    - status
    - author
    - image
    - description
    - meta_keywords
    - meta_description
    - timestamps

  ### 🔗 Article-Category Pivot Table
    - article_id
    - category_id
    - (Many-to-Many Relationship)

  ### 📢 Advertises Table
    - ad_position (header, home_page, other_page)
    - image
    - redirect_url
    - expire_date
    - company_name
    - contact


## 📌 Current Status

#### 🚧 Project is under development
#### 🌐 Live deployment coming soon

# 👨‍💻 Author

**Roman**
- GitHub: https://github.com/romanbenzu1