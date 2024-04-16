import { Component, OnInit } from '@angular/core';
import { NavController } from '@ionic/angular';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage implements OnInit {
  public pesquisa: String = '';
  public nome: String = '';
  public resultado: String = '';
  public titulo: String =  "Meu primeiro App";
  public imagemRandomica: String = "https://picsum.photos/200/200";

  public imagemLocal: String = "../assets/icone-celular.png";

  constructor(private navegacao: NavController) { }

  ngOnInit() {
  }

  abrirBotoes(): void {
    this.navegacao.navigateForward('/botoes');
  }

  abrirLista(): void {
    this.navegacao.navigateForward('/lista');
  }

  public recuperar(): void {
    this.resultado = this.nome;
  }

  public atualiza(): void {
    this.titulo = "Texto alterado";
  }

  public acao(): void {
    this.titulo = "Botão clicado";
  }
}
