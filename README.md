# Benchmark of the performance of the different implementations of the Rebing GraphQL library

## Basic starting point
- Domain model classes with public properties, and return of static data profiled for response time.

## Next Steps
- [ ] Add https with mkcert.
- [ ] Add aws deployment via cloudformation.
- [ ] Add a database connection, doctrine repos, db schema and profile the response time.

## Ideas for improvements:
- [ ] Compare putting all types at global config level vs  putting them at schema level. 
- [ ] Compare single schema vs multiple smaller schemas.
