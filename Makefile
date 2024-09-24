
# Colors
CYAN=\033[1;36m
RESET=\033[0m
ORANGE=\033[1;33m


restart:
	@echo "$(CYAN)Restart application container...$(RESET)"
	@docker container restart app

up:
	@echo "$(CYAN)Starting application...$(RESET)"
	@docker exec app php artisan serve --host=0.0.0.0