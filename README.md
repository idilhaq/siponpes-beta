
# Siponpes Beta - Laravel Modular Project

## Getting Started

### Prerequisites
- [Colima](https://github.com/abiosoft/colima) (or Docker)
- [Composer](https://getcomposer.org/)

### First Setup
1. Clone the repository:
	 ```
	 git clone <repo-url>
	 cd siponpes-beta
	 ```
2. Start Colima:
	 ```
	 colima start
	 ```
3. Install dependencies:
	 ```
	 composer install
	 ```
4. Copy and configure environment:
	 ```
	 cp .env.example .env
	 # Edit .env as needed
	 ```
5. Generate app key:
	 ```
	 ./vendor/bin/sail artisan key:generate
	 ```
6. Start the application:
	 ```
	 ./vendor/bin/sail up
	 ```

### Useful Commands
- Run Laravel Artisan commands:
	```
	./vendor/bin/sail artisan <command>
	```
- List all routes:
	```
	./vendor/bin/sail artisan route:list
	```
- Run migrations:
	```
	./vendor/bin/sail artisan migrate
	```
- Create a new module:
	```
	./vendor/bin/sail artisan module:make <ModuleName>
	```
- Publish module config:
	```
	./vendor/bin/sail artisan vendor:publish --provider="Nwidart\\Modules\\LaravelModulesServiceProvider"
	```
- Composer commands inside Sail:
	```
	./vendor/bin/sail composer <command>
	```

### Sail Alias (Optional)
Add this to your `~/.zshrc` for easier Sail commands:
```
alias sail='[ -f vendor/bin/sail ] && bash vendor/bin/sail || bash sail'
```
Then reload your shell:
```
source ~/.zshrc
```
Now you can use `sail artisan <command>` instead of the full path.

### Accessing Modules
- Visit [http://localhost/psbs](http://localhost/psbs) for the PSB module (authentication required).
- Add more modules using the module generator and register routes/controllers as needed.

### Troubleshooting
- If you see `Class not found` errors for modules, run:
	```
	./vendor/bin/sail composer dump-autoload
	```
- If routes are missing, check your module's `RouteServiceProvider` and `Routes/web.php`.
- For database issues, check your `.env` settings and ensure the database container is running.

---