document.addEventListener("DOMContentLoaded", async () => {
  const slug = new URLSearchParams(window.location.search).get("slug") || "tlg";

  try {
    const resourcesDB = await loadResources();
    const resource = resourcesDB[slug];

    if (!resource) {
      renderNotFound(slug);
      return;
    }

    renderResource(resource);
    setupTabs();
  } catch (error) {
    renderLoadError();
  }
});

async function loadResources() {
  const response = await fetch("ressources.json");
  if (!response.ok) {
    throw new Error("Impossible de charger ressources.json");
  }

  return response.json();
}

function renderResource(resource) {
  setText("breadcrumb", resource.breadcrumb);
  setText("resource-title", resource.title);
  setText("resource-subtitle", resource.subtitle);

  const metaContainer = document.getElementById("meta-under-title");
  metaContainer.innerHTML = (resource.meta || [])
    .map((entry) => `<span class="pill">${escapeHtml(entry)}</span>`)
    .join("");

  const keywordsContainer = document.getElementById("kw-grid");
  keywordsContainer.innerHTML = (resource.keywords || [])
    .map((keyword) => `<a class="kw" href="#">#${escapeHtml(keyword)}</a>`)
    .join("");

  setText("resume-text", resource.tabs?.resume || "");

  const usagesList = document.getElementById("usages-list");
  usagesList.innerHTML = (resource.tabs?.usages?.items || [])
    .map((item) => `<li>${escapeHtml(item)}</li>`)
    .join("");

  const limitsList = document.getElementById("limits-list");
  limitsList.innerHTML = (resource.tabs?.usages?.limits || [])
    .map((item) => `<li>${escapeHtml(item)}</li>`)
    .join("");

  setText("aide-text", resource.tabs?.aide || "");

  const similairesList = document.getElementById("similaires-list");
  similairesList.innerHTML = (resource.tabs?.similaires || [])
    .map((item) => `<li>${escapeHtml(item.name)} — ${escapeHtml(item.desc)}</li>`)
    .join("");

  setText("plus-text", resource.tabs?.plus || "");

  const accessLink = document.getElementById("btn-access");
  accessLink.href = resource.accessUrl || "../../index.php";
}

function renderNotFound(slug) {
  setText("resource-title", "Ressource introuvable");
  setText("resource-subtitle", `Aucune donnée trouvée pour le slug : ${slug}`);
  setText("resume-text", "Ajoutez la ressource dans ressources.json.");
}

function renderLoadError() {
  setText("resource-title", "Erreur de chargement");
  setText("resource-subtitle", "Impossible de charger ressources.json.");
  setText("resume-text", "Vérifiez que vous lancez la page via un serveur local (pas en double-clic file://). ");
}

function setupTabs() {
  const tabs = document.querySelectorAll(".tab");
  const panels = document.querySelectorAll(".panel");

  tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
      tabs.forEach((t) => t.classList.remove("active"));
      panels.forEach((p) => p.classList.remove("active"));

      tab.classList.add("active");
      document.getElementById(tab.dataset.tab).classList.add("active");
    });
  });
}

function setText(id, value) {
  const element = document.getElementById(id);
  if (element) {
    element.textContent = value;
  }
}

function escapeHtml(value) {
  return String(value)
    .replaceAll("&", "&amp;")
    .replaceAll("<", "&lt;")
    .replaceAll(">", "&gt;")
    .replaceAll('"', "&quot;")
    .replaceAll("'", "&#039;");
}
