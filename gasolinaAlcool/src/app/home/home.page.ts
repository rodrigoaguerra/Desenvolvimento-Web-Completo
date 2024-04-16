import { Component } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {
  public precoAlcool: string = '';
  public precoGasolina: string = '';
  public resultado: String = "Resultado";
  constructor() {}

  calcular() {
    // Validar se os campos foram preenchidos
    if(this.precoAlcool !== '' && this.precoGasolina !== '') {
      let pAlcool = parseFloat(this.precoAlcool);
      let pGasolina = parseFloat(this.precoGasolina);

      /**
       * Faz o cálculo (precoAlcool / precoGasolina)
       * se: resultado >= 0.7 melhor utilizar gasolina
       * senão: melhor utilizar o álcool
       */
      let res = pAlcool / pGasolina;
      if(res >= 0.7) {
        this.resultado = 'Melhor utilizar Gasolina!';
      } else {
        this.resultado = 'Melhor utilizar Álcool!';
      }
    } else {
      this.resultado = 'Preencha corretamente os campos!';
    }
  }

}
