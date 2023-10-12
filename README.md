<h4>Prueba técnica FullStack David Márquez</h4>

Para comenzar, por favor ejecute los siguientes comandos: <br />
<ul>
    <li>composer install</li>
    <li>composer dump-autoload</li>
    <li>cp .env.example .env <strong>No olvide definir la base de datos en este archivo</strong></li>
    <li>php artisan key:fenerate</li>
    <li>php artisan migrate --seed</li>
    <li>php artisan serve</li>
</ul>
<br />
<br />
<hr />
Este proyecto utiliza graphQl con Lighthouse, para realizar las pruebas correspondientes puede dirigirse a <strong>http://127.0.0.1:8000/graphql-playground</strong> y realizar la siguiente consulta: <br />
{
  shipment(id: 20) {<br />
    id<br />
    delivery_address<br />
    delivery_date<br />
    status<br />
    products {<br />
      id<br />
      quantity<br />
      active {<br />
        name<br />
        description<br />
        price<br />
      }<br />
    }<br />
    client {<br />
      name<br />
    }<br />
  }<br />
}<br />
<hr />
El repositorio de consumo de API será provisto en el correo, para dividir Backend y FrontEnd<br />
Gracias por su atención y tiempo