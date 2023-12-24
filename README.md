# Benchmark of the performance of the different implementations of the Rebing GraphQL library

## Running project locally:
- `composer install`
- `cp .env.example .env`
- add entry to hosts file to point localhost at rebingbench.local
- ensure your bash or zsh shell has alias for sail `alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'`
- `sail up`


## Basic starting point
- Domain model classes with public properties, and return of static data profiled for response time.

## Next Steps
- [x] First Pass DB schema
- [ ] Update domain model classes
- [ ] Finish DB schema
- [ ] Update GraphQL schema and domain model classes
- [ ] Add a database connection, doctrine repos, data seeder
- [ ] Profile response times locally
- [ ] Add aws deployment via cloudformation.
- [ ] Profile response times on AWS


## Ideas for improvements:
- [ ] Compare putting all types at global config level vs  putting them at schema level. 
- [ ] Compare single schema vs multiple smaller schemas.
