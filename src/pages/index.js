import { Helmet } from "react-helmet";
import React from "react";

const heroes = ["170_0013", "200_0016", "202_0073", "211_6514"];

const backgroundImage = `url(/${heroes[Math.floor(Math.random() * heroes.length)]}.jpg)`;

const HomePage = () => (
  <>
    <Helmet>
      <title>Barnaby Gunning Studio</title>
    </Helmet>

    <div id="bkg" style={{ backgroundImage }}>
      <div id="hero"></div>
      <div id="logo"></div>
      <div id="title">Barnaby Gunning Studio</div>
      <div id="contact">
        63 Loudoun Road,
        <br />
        London NW8 0DQ.
        <br />
        +44 20 39 35 79 88
      </div>
    </div>
  </>
);

export default HomePage;
