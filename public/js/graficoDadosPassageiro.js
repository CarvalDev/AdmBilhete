function colorize(opaque, hover, ctx) {
    const v = ctx.parsed;
    const c = v < -50 ? '#D60000'
      : v < 0 ? '#F46300'
      : v < 50 ? '#0358B6'
      : '#44DE28';
  
    const opacity = hover ? 1 - Math.abs(v / 150) - 0.2 : 1 - Math.abs(v / 150);
  
    return opaque ? c : Utils.transparentize(c, opacity);
  }
  
  function hoverColorize(ctx) {
    return colorize(false, true, ctx);
  }
  
  const config = {
    type: 'pie',
    data: data,
    options: {
      plugins: {
        legend: false,
        tooltip: false,
      },
      elements: {
        arc: {
          backgroundColor: colorize.bind(null, false, false),
          hoverBackgroundColor: hoverColorize
        }
      }
    }
  };