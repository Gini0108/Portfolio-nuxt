<template>
  <div class="terms">
    <h1>Website Terms and Conditions of Use</h1>

    <h2>1. Terms</h2>
    <p>
      By accessing this Website, accessible from sjorsvanholst.nl, you are
      agreeing to be bound by these Website Terms and Conditions of Use and
      agree that you are responsible for the agreement with any applicable local
      laws. If you disagree with any of these terms, you are prohibited from
      accessing this site. The materials contained in this Website are protected
      by copyright and trade mark law.
    </p>

    <h2>2. Use License</h2>
    <p>
      Permission is granted to temporarily download one copy of the materials on
      Sjors van Holst's Website for personal, non-commercial transitory viewing
      only. This is the grant of a license, not a transfer of title, and under
      this license you may not:
    </p>
    <ul>
      <li>Modify or copy the materials;</li>
      <li>
        Use the materials for any commercial purpose or for any public display;
      </li>
      <li>
        Attempt to reverse engineer any software contained on Sjors van Holst's
        Website;
      </li>
      <li>
        Remove any copyright or other proprietary notations from the materials;
        or
      </li>
      <li>
        Transferring the materials to another person or "mirror" the materials
        on any other server.
      </li>
    </ul>
    <p>
      This will let Sjors van Holst to terminate upon violations of any of these
      restrictions. Upon termination, your viewing right will also be terminated
      and you should destroy any downloaded materials in your possession whether
      it is printed or electronic format. These Terms of Service has been
      created with the help of the
      <a href="https://www.termsofservicegenerator.net"
        >Terms Of Service Generator</a
      >.
    </p>

    <h2>3. Disclaimer</h2>
    <p>
      All the materials on Sjors van Holst’s Website are provided "as is". Sjors
      van Holst makes no warranties, may it be expressed or implied, therefore
      negates all other warranties. Furthermore, Sjors van Holst does not make
      any representations concerning the accuracy or reliability of the use of
      the materials on its Website or otherwise relating to such materials or
      any sites linked to this Website.
    </p>

    <h2>4. Limitations</h2>
    <p>
      Sjors van Holst or its suppliers will not be hold accountable for any
      damages that will arise with the use or inability to use the materials on
      Sjors van Holst’s Website, even if Sjors van Holst or an authorize
      representative of this Website has been notified, orally or written, of
      the possibility of such damage. Some jurisdiction does not allow
      limitations on implied warranties or limitations of liability for
      incidental damages, these limitations may not apply to you.
    </p>

    <h2>5. Revisions and Errata</h2>
    <p>
      The materials appearing on Sjors van Holst’s Website may include
      technical, typographical, or photographic errors. Sjors van Holst will not
      promise that any of the materials in this Website are accurate, complete,
      or current. Sjors van Holst may change the materials contained on its
      Website at any time without notice. Sjors van Holst does not make any
      commitment to update the materials.
    </p>

    <h2>6. Links</h2>
    <p>
      Sjors van Holst has not reviewed all of the sites linked to its Website
      and is not responsible for the contents of any such linked site. The
      presence of any link does not imply endorsement by Sjors van Holst of the
      site. The use of any linked website is at the user’s own risk.
    </p>

    <h2>7. Site Terms of Use Modifications</h2>
    <p>
      Sjors van Holst may revise these Terms of Use for its Website at any time
      without prior notice. By using this Website, you are agreeing to be bound
      by the current version of these Terms and Conditions of Use.
    </p>

    <h2>8. Your Privacy</h2>
    <p>Please read our <a href="/privacy-policy">privacy policy</a>.</p>

    <h2>9. Governing Law</h2>
    <p>
      Any claim related to Sjors van Holst's Website shall be governed by the
      laws of Netherlands without regards to its conflict of law provisions.
    </p>
  </div>
</template>

<script lang="ts">
import { Vue } from "vue-class-component";

export default class Terms extends Vue {
  mounted(): void {
    document.title = `Terms of service | Bot-Ross`;
  }
}
</script>

<style lang="scss" scoped>
.terms {
  padding: 1em;

  h1,
  h2 {
    margin: 0;
  }

  h1 {
    font-weight: 500;
    font-size: 1.5rem;
    margin-bottom: -0.75rem;
  }

  h2 {
    font-weight: 600;
    font-size: 1.25rem;
    margin-top: 1.25rem;
  }

  p {
    font-size: 1rem;
    margin: 0.4rem 0;
  }

  ul {
    margin: 0;
    font-size: 1rem;
  }
}
</style>
