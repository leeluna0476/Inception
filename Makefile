.DEFAULT_GOAL = all

all:
	docker-compose -f ./srcs/docker-compose.yml up --build -d

down:
	docker-compose -f ./srcs/docker-compose.yml down --rmi all

stop:
	docker-compose -f ./srcs/docker-compose.yml stop

clean:

re:
	make down && make all
