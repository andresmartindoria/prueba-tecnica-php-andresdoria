# prueba-tecnica-php-andresdoria
Prueba Técnica para DASHBOARD TECHNOLOGIES S.L

Este proyecto es una prueba técnica realizada en PHP sin usar frameworks. Contiene la implementación de una entidad `User`, un repositorio para manejar la persistencia de usuarios y un caso de uso para crear un usuario. También se incluyen pruebas unitarias e integrales para asegurar el correcto funcionamiento del sistema.

## Requisitos Previos

- PHP 7.4 o superior
- Composer
- Git

## Instrucciones de Instalación

### 1. Clonar el Repositorio

Primero, clona este repositorio en tu máquina local:

```
git clone https://github.com/tuusuario/prueba-tecnica-php-andresdoria.git
```
Cambia al directorio del proyecto:
```
cd prueba-tecnica-php-andresdoria
```
### 2. Instalar Dependencias
Utiliza Composer para instalar las dependencias necesarias:
```
composer install
```
### 3. Ejecutar las Pruebas
Para asegurarte de que todo funciona correctamente, ejecuta las pruebas unitarias e integrales utilizando PHPUnit:
```
./vendor/bin/phpunit test
```
Esto ejecutará todas las pruebas y te mostrará los resultados en la terminal.

### Estructura del Proyecto
src/: Contiene el código fuente del proyecto.
Entity/: Contiene la clase User que representa la entidad de usuario.
Repository/: Contiene la implementación del repositorio UserRepository.
UseCase/: Contiene el caso de uso CreateUserUseCase para crear usuarios.
DTO/: Contiene el Data Transfer Object UserRequestDTO.
tests/: Contiene las pruebas unitarias e integrales del proyecto.
Unit/: Pruebas unitarias para las entidades y casos de uso.
Integration/: Pruebas integrales para verificar la integración del sistema.

### Uso del Proyecto
Para crear un nuevo usuario, se utiliza el caso de uso CreateUserUseCase, que requiere un repositorio de usuario y un DTO (UserRequestDTO). Este caso de uso se puede invocar desde un controlador en un contexto más amplio.

Ejemplo de uso:
```
$userRepository = new UserRepository();
$createUserUseCase = new CreateUserUseCase($userRepository);

$dto = new UserRequestDTO('John Doe', 'john@example.com', 'password123');
$createUserUseCase->execute($dto);
```
Esto creará y almacenará un nuevo usuario en el repositorio.

### Notas
Este proyecto está diseñado para ser simple y fácil de entender, utilizando únicamente PHP puro sin frameworks adicionales. Se utiliza ramsey/uuid para generar identificadores únicos para los usuarios.

#### Autor
Andrés Doria
