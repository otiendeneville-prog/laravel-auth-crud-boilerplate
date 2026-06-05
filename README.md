# Laravel Auth CRUD Boilerplate

A modern Laravel 12 application for managing ideas with user authentication and CRUD operations.

## Features

✅ User Authentication (Register & Login)  
✅ Create, Read, Update, Delete Ideas  
✅ User-specific idea management  
✅ Authorization policies (only owners can edit/delete)  
✅ Clean Tailwind CSS UI  
✅ Responsive design  
✅ Database migrations included  

## Installation

### 1. Clone the Repository
```bash
git clone <your-repo-url>
cd laravel-auth-crud-boilerplate
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Environment Setup
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Database Setup
```bash
php artisan migrate
```

### 5. Run the Application
```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser.

---

## User Interface Walkthrough

### 🏠 Home Page - Ideas List
**Route:** `/ideas`

```
┌─────────────────────────────────────────┐
│        Laravel Auth CRUD                │
├─────────────────────────────────────────┤
│  Ideas                                  │
│  [Create New Idea] (shown if logged in) │
├─────────────────────────────────────────┤
│  ┌─────────────────────────────────────┐│
│  │ John Doe - 2 hours ago              ││
│  │                                      ││
│  │ "I have an amazing idea for a new  ││
│  │  feature that could revolutionize   ││
│  │  the way we work together..."       ││
│  │                     [Edit] [Delete] ││
│  └─────────────────────────────────────┘│
│                                         │
│  ┌─────────────────────────────────────┐│
│  │ Jane Smith - 1 day ago              ││
│  │                                      ││
│  │ "AI integration would be cool for   ││
│  │  automating routine tasks..."       ││
│  │                             [Edit]  ││
│  └─────────────────────────────────────┘│
│                                         │
│  Previous | 1 | 2 | 3 | Next           │
└─────────────────────────────────────────┘
```

**Features:**
- Shows all ideas from all users
- Display idea author name
- Shows when idea was created (e.g., "2 hours ago")
- Edit/Delete buttons only appear for your own ideas
- Pagination (10 ideas per page)
- "Create New Idea" button only visible when logged in

---

### ✍️ Create New Idea
**Route:** `/ideas/create`

```
┌─────────────────────────────────────────┐
│        Create New Idea                  │
├─────────────────────────────────────────┤
│                                         │
│  Your Idea                              │
│  ┌─────────────────────────────────────┐│
│  │                                      ││
│  │  (Text area for writing idea)       ││
│  │                                      ││
│  │  Min 5 chars, Max 1000 chars        ││
│  └─────────────────────────────────────┘│
│                                         │
│  [Save Idea]  [Cancel]                 │
│                                         │
└─────────────────────────────────────────┘
```

**Features:**
- Rich textarea for writing ideas
- Input validation (5-1000 characters)
- Save button creates idea in database
- Cancel returns to ideas list
- Only accessible to logged-in users
- Auto-associates idea with current user

---

### ✏️ Edit Idea
**Route:** `/ideas/{id}/edit`

```
┌─────────────────────────────────────────┐
│           Edit Idea                     │
├─────────────────────────────────────────┤
│                                         │
│  Your Idea                              │
│  ┌─────────────────────────────────────┐│
│  │                                      ││
│  │  (Text area pre-filled with         ││
│  │   current idea text)                ││
│  │                                      ││
│  └─────────────────────────────────────┘│
│                                         │
│  [Update Idea]  [Cancel]                │
│                                         │
└─────────────────────────────────────────┘
```

**Features:**
- Form pre-filled with current idea
- Same validation as create
- Only owner can edit
- Update button saves changes
- Shows error messages for invalid input

---

### 👁️ View Idea Detail
**Route:** `/ideas/{id}`

```
┌─────────────────────────────────────────┐
│     John Doe's Idea - June 5, 2026      │
├─────────────────────────────────────────┤
│                                         │
│  "I have an amazing idea for a new     │
│  feature that could revolutionize      │
│  the way we work together and make     │
│  collaboration seamless..."            │
│                                         │
│  (If owner: [Edit] [Delete])           │
│                                         │
│  ← Back to Ideas                        │
│                                         │
└─────────────────────────────────────────┘
```

**Features:**
- Full idea text displayed
- Author name and creation date
- Edit/Delete buttons only for owner
- Back link to return to list

---

### 📝 Register
**Route:** `/register`

```
┌─────────────────────────────────────────┐
│          Create Account                 │
├─────────────────────────────────────────┤
│                                         │
│  Name                                   │
│  [________________________]              │
│                                         │
│  Email                                  │
│  [________________________]              │
│                                         │
│  Password                               │
│  [________________________]              │
│                                         │
│  Confirm Password                       │
│  [________________________]              │
│                                         │
│  [Register]                             │
│                                         │
│  Already have an account? [Login]       │
│                                         │
└─────────────────────────────────────────┘
```

**Features:**
- Simple registration form
- Email validation
- Password hashing
- Confirms password match
- Links to login page

---

### 🔐 Login
**Route:** `/login`

```
┌─────────────────────────────────────────┐
│           Login                         │
├─────────────────────────────────────────┤
│                                         │
│  Email                                  │
│  [________________________]              │
│                                         │
│  Password                               │
│  [________________________]              │
│                                         │
│  [Login]                                │
│                                         │
│  Don't have account? [Register]         │
│                                         │
└─────────────────────────────────────────┘
```

**Features:**
- Email/password login
- Session-based authentication
- Links to register page
- Redirects to ideas list on success

---

## API Routes

### Public Routes (No Auth Required)
```
GET  /ideas              - List all ideas
GET  /ideas/{id}         - View single idea
GET  /register           - Show registration form
POST /register           - Submit registration
GET  /login              - Show login form
POST /login              - Submit login
```

### Protected Routes (Auth Required)
```
GET    /ideas/create      - Show create form
POST   /ideas             - Store new idea
GET    /ideas/{id}/edit   - Show edit form
PATCH  /ideas/{id}        - Update idea
DELETE /ideas/{id}        - Delete idea
DELETE /logout            - Logout user
```

### Admin Routes
```
GET /admin               - Admin area (authorization required)
```

---

## Database Schema

### Users Table
```
id              INT (Primary Key)
name            VARCHAR(255)
email           VARCHAR(255) UNIQUE
email_verified_at TIMESTAMP
password        VARCHAR(255)
remember_token  VARCHAR(100)
created_at      TIMESTAMP
updated_at      TIMESTAMP
```

### Ideas Table
```
id              INT (Primary Key)
user_id         INT (Foreign Key → users.id)
idea            TEXT
created_at      TIMESTAMP
updated_at      TIMESTAMP
```

---

## Authorization

### IdeaPolicy
- **update**: Only the idea owner can edit
- **delete**: Only the idea owner can delete

Example:
```php
// In controller
$this->authorize('update', $idea);  // Checks if user owns the idea
$this->authorize('delete', $idea);  // Checks if user owns the idea
```

---

## Styling

All views use **Tailwind CSS** with:
- Dark theme (gray-800 background)
- Indigo accent color
- Responsive design
- Hover effects
- Error message styling

---

## Form Validation

### Create/Update Idea
```
idea: required | string | min:5 | max:1000
```

Validation errors display inline with red text.

---

## Error Handling

- ❌ 401 Unauthorized - Redirect to login for protected routes
- ❌ 403 Forbidden - Shown if you try to edit/delete someone else's idea
- ❌ 404 Not Found - Idea doesn't exist
- ❌ 422 Unprocessable Entity - Validation errors

---

## Testing

### Test User Registration
1. Go to `/register`
2. Enter name, email, password
3. Submit
4. Redirected to login

### Test Create Idea
1. Login
2. Click "Create New Idea"
3. Enter idea text
4. Click "Save Idea"
5. Idea appears in list

### Test Edit Idea
1. Login and create an idea
2. Click "Edit" on your idea
3. Modify text
4. Click "Update Idea"

### Test Delete Idea
1. Login and create an idea
2. Click "Delete" on your idea
3. Confirm deletion
4. Idea removed from list

### Test Authorization
1. Login as User A, create idea
2. Login as User B
3. User B sees User A's idea but NO edit/delete buttons
4. Trying to access `/ideas/{id}/edit` directly shows 403 error

---

## Project Structure

```
laravel-auth-crud-boilerplate/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── IdeaController.php      # CRUD logic
│   │       └── Auth/
│   │           ├── RegisteredUserController.php
│   │           └── SessionsController.php
│   ├── Models/
│   │   ├── User.php                   # User model with ideas()
│   │   └── Idea.php                   # Idea model with user()
│   └── Policies/
│       └── IdeaPolicy.php             # Authorization
├── database/
│   └── migrations/
│       ├── 0001_01_01_000000_create_users_table.php
│       └── 2026_06_05_000003_create_ideas_table.php
├── resources/
│   └── views/
│       ├── ideas/
│       │   ├── index.blade.php        # List ideas
│       │   ├── create.blade.php       # Create form
│       │   ├── edit.blade.php         # Edit form
│       │   └── show.blade.php         # Detail view
│       └── auth/                      # Login/Register views
├── routes/
│   └── web.php                        # Route definitions
└── composer.json
```

---

## Requirements

- PHP 8.2+
- Laravel 12
- MySQL/SQLite
- Node.js (for npm)

---

## License

MIT License - feel free to use this for your projects!

---

## Quick Start Commands

```bash
# Clone and setup
git clone <repo>
cd laravel-auth-crud-boilerplate
composer install
npm install
cp .env.example .env
php artisan key:generate

# Run migrations
php artisan migrate

# Start development server
php artisan serve

# In another terminal, compile assets
npm run dev

# Visit
http://localhost:8000
```

---

**Happy coding! 🚀**
