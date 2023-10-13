# A simple table using Codeigniter 4

We have a Users table, and you can make CRUD operations

## How to run this project?

### Just follow the instructions above:

#### Using XAMPP or installed PHP

Clone the repository:

```bash 
    git clone https://github.com/NatanRei/codeigniter-datatable.git
    cd codeigniter-datatable
```

Copy .env file:

```bash 
    cp .env.example .env
```

Install dependencies and migrate database:

```bash 
    composer install
    php spark migrate # create the database for project before
    php spark db:seed
```

Run the project:

```bash 
    php spark serve
```


#### Using Docker

Clone the repository:

```bash 
    git clone https://github.com/NatanRei/codeigniter-datatable.git
    cd codeigniter-datatable
```

Copy .env file:

```bash 
    cp .env.example .env
```

Run docker:

```bash 
    docker compose up -d
    docker compose run web php spark migrate
    docker compose run web php spark db:seed User
```