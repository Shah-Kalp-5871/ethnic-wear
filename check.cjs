const { chromium } = require('playwright');

(async () => {
  const browser = await chromium.launch();
  const page = await browser.newPage();
  
  page.on('console', msg => console.log('BROWSER LOG:', msg.text()));
  page.on('pageerror', error => console.log('BROWSER ERROR:', error.message));

  const response = await page.goto('http://127.0.0.1:8000/new/');
  console.log('Status:', response.status());
  
  // check module
  console.log('typeof window.module:', await page.evaluate(() => typeof window.module));
  console.log('window.module:', await page.evaluate(() => window.module ? JSON.stringify(window.module) : null));

  // wait a bit
  await page.waitForTimeout(3000);
  await page.screenshot({ path: 'screenshot.png', fullPage: true });
  
  await browser.close();
})();
