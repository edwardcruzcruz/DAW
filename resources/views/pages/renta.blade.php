@extends('layouts.default')
@section('content')
<div class="col-12  container" id="estadistica"></div>
<div class="row">
    <div class="col-12 container">
        <button class="col-3" onclick="estadistica({{ $rentas }})">Ver Cantidad Proyectos 2018</button>
        <button class="col-3" onclick="estadistica({{ $rentas }})">Usuarios Registrados 2018</button>
        <button class="col-3" onclick="estadistica({{ $rentas }})">Cantidad de Proyectos Por Categorias</button>
    </div>
</div>

@stop
@section('content_js')

	<script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="http://d3js.org/d3.v4.min.js"></script>

  <script type="text/javascript">
    // Definición de la función diagrama
    function estadistica(ventas){
        
        //Layout del tipo de grafico
        var h1= document.createElement("h1");
          h1.innerHTML= "GRAFICO DE CANTIDAD DE PROYECTOS 2018";
          var div= document.getElementById("estadistica");
        
      div.appendChild(h1);
      // Declarar las variables del contenedor SVG  
        ancho = 900; // Ancho 600 px
        alto = 600;  // Alto 600 px
        margen= 75; // Cada margen 50 px
        dist_barras = 2; // Distancia entre barras 2 px
        
        var datos = [];
        for(var i=0;i<ventas.length;i++){
          var elem= [];
          elem.push(ventas[i]['Mes']);
          elem.push(ventas[i]['CantProyect0']);
          datos.push(elem);
        }
        var maxRango =d3.max(datos, function(d) {return d[1];})
      // Declarar los colores
        colores = ["#335EFF", "#6E33FF", "#D433FF", "#FF33C4", "#FF335E", "#FF6E33", 
        "#335EFF", "#6E33FF", "#D433FF", "#FF33C4", "#FF335E", "#FF6E33"];
      
      // Crear el contenedor SVG    
        var svg = d3.select("#estadistica")
              .append("svg")
              .attr("width", ancho)
              .attr("height", alto);

      // Definir la escala X Escala Lineal
      // domain es el intervalo de valores sin escalar
      // Para calcular el valor maximo usamos d3.max
      // y como datos es una matriz con dos columnas 
      // empleamos d[1] para referirnos a los valores de lluvia
      // d[0] son los meses.
      // range es el intervalo de valores escalado
      // los pixeles sobre los que vamos a dibujarlo.
        var escala_X = d3.scaleLinear()
                .domain([0, maxRango])
                .range([0, ancho - 2 * margen]);

      // Definir la escala Y Escala de Banda
      // domain es el intervalo de valores sin escalar
      // en este caso son los meses
      // range es el intervalo de valores escalado
      // el numero de pixeles donde se dibuja
        var escala_Y = d3.scaleBand()
                .domain(datos.map(function(d){ return d[0]}))
                .rangeRound([0, alto - 2 * margen])
                .paddingInner(0.05);

      // Dejado a proposito para ver como mostrar los valores en la consola
        console.log("Dominio " + escala_Y.domain());
        console.log("Rango " + escala_Y.range());
        console.log("Bandwidth " + escala_Y.bandwidth());

      // Definir la escala Z Escala Ordinal
      // A cada mes se le asigna un color
      // Dominio los meses
      // Rango los colores
         var escala_Z = d3.scaleOrdinal()
                .domain(datos.map(function(d){ return d[0]}))
                .range(colores.map(function(d){ return d;}));
      
      // Crear las barras
        svg.append("g")       // Se crea un grupo para las barras
           .attr("transform", "translate( " + margen + "," + margen + " )")
           .selectAll("rect") // Se traslada el eje de coordenadas
           .data(datos)       // Presentamos los datos
           .enter()           // Seleccionamos los datos que no tienen objetos
           .append("rect")    // Añadimos los rectangulos 
           .attr("x", 0)      // Las barras comienzan en x = 0
           .attr("y", function (d,i) {
              return i * escala_Y.step();
            })                // La posición y se aumenta el ancho de cada barra
           .attr("width", function (d) {
              return escala_X(d[1]);
           })                 // La longitud es la cantidad de lluvia escalada
           .attr("height", function (d) {
              return escala_Y.bandwidth();
           })                 // La anchura de la barra se calcula con la escala
           .attr("fill", function(d) {
              return escala_Z(d[0]);
           });                // Con la Escala Z mapeamos el color a cada barra


      // Definir eje X y asignarle su escala
      // Eje inferior en base a la escala escala_X
      // Asignamos el numero de divisiones
        var eje_X = d3.axisBottom()
                      .scale(escala_X)
                      .tickValues(d3.range( 0, maxRango, maxRango/4 ));

      // Insertar el eje Horizontal
        svg.append("g")      // Añadir un grupo para el eje
           .attr("transform", "translate( " + margen + "," + (alto - margen) + " )")
                             // Desplazar el eje de coordenadas
           .call(eje_X)      // Llamar el eje X
           .append("text")   // Añadirle una leyenda
           .attr("font-family", "sans-serif")
           .attr("font-size", 14)
           .attr("text-anchor", "middle")
           .attr("x", (ancho/2) - margen)
           .attr("y", 40)
           .attr("fill", "blue")
           .text("Cantidad Proyecto");

      // Definir eje Y y asignarle su escala
      // Eje Vertical Izquierdo en base a la escala_Y
        var eje_Y = d3.axisLeft()
                      .scale(escala_Y);

      // Insertar el eje Vertical
        svg.append("g")     // Añadir un grupo para el eje
           .attr("transform", "translate( " + margen + "," + margen + " )")
                            // Desplazar el eje de coordenadas
           .call(eje_Y)    // Llamar el eje Y
            .append("text")
            .attr("font-family", "sans-serif")
           .attr("font-size", 14)
           .attr("text-anchor", "middle")
           .attr("x", 0)
           .attr("y", 0)
           .attr("fill", "blue")
            .text("Meses");
        
    };
  </script>
@stop
