1. Install docker
2. Please run commands:
- ./vendor/bin/sail up -d
- ./vendor/bin/sail shell 
- composer install
3. Go to host http://localhost
4. siege -c 100 -t 10s -r 100 http://localhost
