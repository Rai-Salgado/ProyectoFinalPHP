# Proyecto Final

---

## Indice
- [Proyecto Final](#proyecto-final)
  - [Indice](#indice)
  - [Descripción](#descripción)
  - [Métodos de Acceso](#métodos-de-acceso)
    - [1. Login manual](#1-login-manual)
    - [2. Login mediante Google](#2-login-mediante-google)

---

## Descripción 
Proyecto que permite acceder a un dashboard mediante distintos métodos de acceso.

---

## Métodos de Acceso
A continuación, se detallan los distintos tipos de métodos de acceso incluidos en este proyecto:

### 1. Login manual
Inicio de sesión simple. El usuario debe registrare con el botón `Registrar` con un nombre de usuario, correo, y una contraseña. Posteriomente, el usuario puede iniciar sesión con el botón `Iniciar Sesión` con su cuenta recién creada para entrar al dashboard.

> Se utiliza la librería de **Breeze** para el framework de **Laravel**, el cual permite manejar este tipo de inicio de sesión.

### 2. Login mediante Google
El usuario puede iniciar sesión directamente desde el botón `Iniciar Sesión con Google` para hacer el registro con un correo de **Google**.

> Se utiliza el protocolo **OAuth 2.0**, así como la consola de **Google Cloud** para crear las credenciales del cliente, el dominio, y la URL de direccionamiento, con la herramienta de **Google Auth Platform**.