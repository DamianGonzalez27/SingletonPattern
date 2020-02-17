
<p align="center"><a href="https://damiangonzalezdev.blogspot.com/" target="_blank"><img src="https://cdn.pixabay.com/photo/2017/05/12/15/16/hexagon-2307350_960_720.png" width="100"></a></p>


# Patron de diseño Singleton en PHP


El patron de diseño Singleton (solteron para los amigos), es un patrón que busca generar una única instancia de una clase para toda la aplicación. Lo logramos mediante la restricción de la libre creación de instancias mediante el operador new e imponiendo un constructor privado y un método estático para la obtención de dicha instancia. En mi experiencia uno de los patrones de diseño mas sencillos de dominar y sin duda uno de los mas utilizados. La intención de este patrón es garantizar que solo pueda existir una una instancia de una clase determinada, y que exista una referencia global en toda la aplicación

En este sencillo ejemplo de implementacion aprenderemos sobre:

- Implementacion estructural en el codigo
- Archivos necesarios para la implementacion
- Flujo de trabajo del patron de diseño

## Requerimientos

- Composer version 1.9.0 ^

## Usando el Script

- Clona el repositorio con el comando:

```sh
$ git clone https://github.com/DamianGonzalez27/SingletonPattern.git
```

- Una vez clonado el repositorio situate en la carpeta raiz del proyecto

```sh
$ cd AbstractFactory
```

- Ejecuta el comando de composer para instalar las dependencias

```sh
$ composer install
```

- Ejecuta el comando de ejecucion en consola para ver el resultado

Por defecto nuestro programa nos retorna un mensaje en consola 'Hola mundo'



### Sigueme en mis redes sociales:

- [Blogger](https://damiangonzalezdev.blogspot.com/)
- [Twitter](https://twitter.com/DamianDev1)